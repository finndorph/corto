<?php

require_once 'Abstract.php';

class Corto_Module_Services_Exception extends Corto_ProxyServer_Exception {
}

class Corto_Module_Services extends Corto_Module_Abstract {
    const DEFAULT_REQUEST_BINDING = 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect';
    const DEFAULT_RESPONSE_BINDING = 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST';

    /**
     * Handle a Single Sign On request (Authentication Request)
     */
    public function singleSignOnService($params)
    {
        $request = $this->_server->getBindingsModule()->receiveRequest($params);
        $scopedIDPs = array();
        $request['__']['Transparent'] = $this->_server->getCurrentEntitySetting('TransparentProxy', false);

        // If ForceAuthn attribute is on, then remove cached responses and cached IDPs
        // @todo remember NOT to forget earlier logins so that we can do SLO for them as well
        if ($request['_ForceAuthn']) {
            $this->_server->getSessionLog()->debug('SSO: Forcing new authentication, cached responses removed');
            unset($_SESSION['CachedResponses']);
        }

        // Add scoped IdPs (allowed IDPs for reply) from request to allowed IdPs for responding

        foreach ((array) nvl3($request, 'samlp:Scoping', 'samlp:IDPList', 'samlp:IDPEntry') as $IDPEntry) {
            $scopedIDPs[] = $IDPEntry['_ProviderID'];
        }

        $this->_server->getSessionLog()->debug("SSO: Request contains scoped idps: " . print_r($scopedIDPs, 1));
        // If we configured an IDPList it takes precedence to the one in the request
        // But we still need to append it to the original list
        // IDPList might contain only one idp!
        $presetIdPs = $this->_server->getPresetIDPs();
        if ($presetIdPs) {
            $scopedIDPs = $presetIdPs;
            $this->_server->getSessionLog()->debug("SSO: Scoped idps found in metadata: " . print_r($scopedIDPs, 1));
        }

        // remove issuer + us from scope ..
        $requesterIDs = array($params['EntityID'], $request['saml:Issuer']['__v']);

        // filter out already visited proxies (RequesterID) to prevent looping ...
        foreach ((array) nvl2($request, 'samlp:Scoping', 'samlp:RequesterID') as $requesterID) {
            $requesterIDs[] = $requesterID['__v'];
        }

        $scopedIDPs = array_diff($scopedIDPs, $requesterIDs);

        // If one of the scoped IDP has a cache entry, return that
        $cachedIDPs = array();
        if (isset($_SESSION['CachedResponses'])) {
            $cachedIDPs = array_keys((array) $_SESSION['CachedResponses']);
        }

        if ($commonIDPs = array_intersect($cachedIDPs, $scopedIDPs) || (sizeof($scopedIDPs) == 0 && $commonIDPs = $cachedIDPs)) {
            $this->_server->getSessionLog()->debug("SSO: Cached response found");
            $cachedResponse = $_SESSION['CachedResponses'][$commonIDPs[0]];
            $response = $this->_server->createEnhancedResponse($request, $cachedResponse);
            return $this->_server->sendResponseToRequestIssuer($request, $response);
        }

        // If the scoped proxycount = 0, respond with a ProxyCountExceeded error
        if (isset($request['samlp:Scoping']['_ProxyCount']) && $request['samlp:Scoping']['_ProxyCount'] == 0) {
            $this->_server->getSessionLog()->debug("SSO: Proxy count exceeded!");
            $response = $this->_server->createErrorResponse($request, 'ProxyCountExceeded');
            return $this->_server->sendResponseToRequestIssuer($request, $response);
        }

        // Get all registered Single Sign On Services
        $candidateIDPs = $this->_server->getAllowedIdps();

        $this->_server->getSessionLog()->debug("SSO: Candidate idps found in metadata: " . print_r($candidateIDPs, 1));

        // If we have scoping, filter out every non-scoped IdP
        $candidateIDPs = sizeof($scopedIDPs) > 0 ? array_intersect($scopedIDPs, $candidateIDPs) : $candidateIDPs;
        $this->_server->getSessionLog()->debug("SSO: Candidate idps found in metadata: " . print_r($candidateIDPs, 1));

        // 1+ candidate found, send authentication request to the first one
        if (count($candidateIDPs) >= 1) {
            $idp = array_shift($candidateIDPs);
            $this->_server->getSessionLog()->debug("SSO: Only 1 candidate IdP: $idp");
            return $this->_server->sendAuthenticationRequest($request, $idp, $presetIdPs);
        }

        // No IdPs found! Send an error response back.
        if (count($candidateIDPs) === 0) {
            $this->_server->getSessionLog()->debug("SSO: No Supported Idps!");
            $response = $this->_server->createErrorResponse($request, 'NoSupportedIDP');
            return $this->_server->sendResponseToRequestIssuer($request, $response);
        }

        // > 1 IdPs found, but isPassive attribute given, unable to continue
        if (isset($request['_IsPassive']) && $request['_IsPassive'] === 'true') {
            $this->_server->getSessionLog()->debug("SSO: IsPassive with multiple IdPs!");
            $response = $this->_server->createErrorResponse($request, 'NoPassive');
            return $this->_server->sendResponseToRequestIssuer($request, $response);
        }

        // Store the request in the session
        $id = $request['_ID'];
        $_SESSION[$id]['SAMLRequest'] = $request;

        // Show WAYF
        $this->_server->getSessionLog()->debug("SSO: Showing WAYF");
        return $this->_showWayf($request, $candidateIDPs);
    }

    /**
     * Handle the forwarding of the user to the proper IdP after the WAYF screen.
     *
     * @return void
     */
    public function continueToIdP()
    {
        $selectedIdp = $_REQUEST['idp'];

        // Retrieve the request from the session.
        $id = $_POST['ID'];
        $request = $_SESSION[$id]['SAMLRequest'];

        $this->_server->sendAuthenticationRequest($request, $selectedIdp);
    }

    /**
     * Receive the assertion from the IdP and send it on to the SP.
     *
     * @throws Corto_Module_Services_Exception
     * @return void
     */
    public function assertionConsumerService($params)
    {
        $receivedResponse = $this->_server->getBindingsModule()->receiveResponse($params);

        // Get the ID of the Corto Request message
        if (!$receivedResponse['_InResponseTo']) {
            $message = "Unsollicited assertion (no InResponseTo in message) not supported!";
            throw new Corto_Module_Services_Exception($message);
        }

        $receivedRequest = $this->_server->getReceivedRequestFromResponse($receivedResponse['_InResponseTo']);
        $proxySP = null;
        // @todo filtering and processing should be done on both the sp- and the idpside
        // @todo cross federation bridging NOT - we can't guarantee the uniqueness of entityid's !!!
        if ($proxyIDP = nvl($receivedRequest['__'], 'ProxyIDP')) {
            $proxySP = $params['EntityID'];
            $this->_server->setCurrentEntity($proxyIDP);
            $this->_server->startSession();
        }

        $this->_server->filterInputAssertionAttributes($receivedResponse, $receivedRequest);

        // Cache the response
        if ($this->_server->getCurrentEntitySetting('keepsession', false)) {
            $issuerEntityId = $receivedResponse['saml:Issuer']['__v'];
            $_SESSION['CachedResponses'][$issuerEntityId] = $receivedResponse;
        }

        $processingEntities = $this->_getReceivedResponseProcessingEntities($receivedRequest, $receivedResponse);
        if (!empty($processingEntities)) {
            $firstProcessingEntity = array_shift($processingEntities);
            $_SESSION['Processing'][$receivedResponse['_ID']]['RemainingEntities'] = $processingEntities;
            $_SESSION['Processing'][$receivedResponse['_ID']]['OriginalDestination'] = $receivedResponse['_Destination'];
            $_SESSION['Processing'][$receivedResponse['_ID']]['OriginalBinding'] = $receivedResponse['__']['ProtocolBinding'];

            // Change the destiny of the received response
            $receivedResponse['_Destination'] = $firstProcessingEntity['Location'];
            $receivedResponse['__']['ProtocolBinding'] = $firstProcessingEntity['Binding'];
            $receivedResponse['__']['Return'] = $this->_server->getCurrentEntityUrl('processedAssertionConsumerService');

            // @todo protocol ?
            $responseAssertionAttributes = &$receivedResponse['saml:Assertion']['saml:AttributeStatement'][0]['saml:Attribute'];
            $attributes = Corto_XmlToArray::attributes2array($responseAssertionAttributes);
            $attributes['ServiceProvider'] = array($receivedRequest['saml:Issuer']['__v']);
            $responseAssertionAttributes = Corto_XmlToArray::array2attributes($attributes);

            return $this->_server->getBindingsModule()->send($receivedResponse, $firstProcessingEntity);
        }
        else {
            // if $receivedRequest['originalIDP'] change current to that 
            $receivedResponse = $this->_server->createEnhancedResponse($receivedRequest, $receivedResponse, $proxySP);
            return $this->_server->sendResponseToRequestIssuer($receivedRequest, $receivedResponse);
        }
    }

    protected function _getReceivedResponseProcessingEntities(array $receivedRequest, array $receivedResponse)
    {
        $currentEntityProcessing = $this->_server->getCurrentEntitySetting('Processing', array());

        $remoteEntity = $this->_server->getRemoteEntity($receivedRequest['saml:Issuer']['__v']);

        $processing = $currentEntityProcessing;
        if (isset($remoteEntity['Processing'])) {
            $processing += $remoteEntity['Processing'];
        }

        return $processing;
    }

    /**
     * Ask the user for consent over all of the attributes being sent to the SP.
     *
     * Note this is part 1/2 of the Corto Consent Internal Response Processing service.
     *
     * @return void
     */
    public function provideConsentService()
    {
        $response = $this->_server->getBindingsModule()->receiveResponse();
        $_SESSION['consent'][$response['_ID']]['response'] = $response;

        $attributes = Corto_XmlToArray::attributes2array(
            $response['saml:Assertion']['saml:AttributeStatement'][0]['saml:Attribute']
        );
        $serviceProviderEntityId = $attributes['ServiceProvider'][0];
        unset($attributes['ServiceProvider']);

        $priorConsent = $this->_hasStoredConsent($serviceProviderEntityId, $response, $attributes);
        if ($priorConsent) {
            $response['_Consent'] = 'urn:oasis:names:tc:SAML:2.0:consent:prior';

            $response['_Destination'] = $response['__']['Return'];
            $response['__']['ProtocolBinding'] = self::DEFAULT_RESPONSE_BINDING;

            return $this->_server->getBindingsModule()->send(
                $response,
                $this->_server->getRemoteEntity($serviceProviderEntityId)
            );
        }

        $html = $this->_server->renderTemplate(
            'consent',
            array(
                'action' => $this->_server->getCurrentEntityUrl('processConsentService'),
                'ID' => $response['_ID'],
                'attributes' => $attributes,
            ));
        $this->_server->sendOutput($html);
    }

    /**
     * Process consent that is given and sent the user back to the proxy flow
     *
     * Note this is part 2/2 of the Corto Consent Response Processing service.
     *
     * @return void
     */

    public function processConsentService()
    {
        $response = $_SESSION['consent'][$_POST['ID']]['response'];

        $attributes = Corto_XmlToArray::attributes2array(
            $response['saml:Assertion']['saml:AttributeStatement'][0]['saml:Attribute']
        );
        $serviceProviderEntityId = $attributes['ServiceProvider'][0];
        unset($attributes['ServiceProvider']);

        if (!isset($_POST['consent']) || $_POST['consent'] !== 'yes') {
            // No consent given
            print $this->_server->renderTemplate(
                'noconsent',
                array(
                    'attributes' => $attributes,
                )
            );
            return;
        }

        $this->_storeConsent($serviceProviderEntityId, $attributes);

        $response['_Consent'] = 'urn:oasis:names:tc:SAML:2.0:consent:obtained';
        $response['_Destination'] = $response['__']['Return'];
        $response['__']['ProtocolBinding'] = self::DEFAULT_RESPONSE_BINDING;

        $this->_server->getBindingsModule()->send(
            $response,
            $this->_server->getRemoteEntity($serviceProviderEntityId)
        );
    }

    /**
     *
     * @return void
     */
    public function processedAssertionConsumerService()
    {
        $response = $this->_server->getBindingsModule()->receiveResponse();
        $remainingProcessingEntities = &$_SESSION['Processing'][$response['_ID']]['RemainingEntities'];

        if (!empty($remainingProcessingEntities)) { // Moar processing!
            $nextProcessingEntity = array_shift($remainingProcessingEntities);

            // Change the destiny of the received response
            $receivedResponse['_Destination'] = $nextProcessingEntity['Location'];
            $receivedResponse['__']['ProtocolBinding'] = $nextProcessingEntity['Binding'];
            $receivedResponse['__']['Return'] = $this->_server->getCurrentEntityUrl('processedAssertionConsumerService');

            return $this->_server->getBindingsModule()->send($receivedResponse, $nextProcessingEntity);
        }
        else { // Done processing! Send off to SP
            $response['_Destination'] = $_SESSION['Processing'][$response['_ID']]['OriginalDestination'];
            $response['__']['ProtocolBinding'] = $_SESSION['Processing'][$response['_ID']]['OriginalBinding'];

            $receivedRequest = $this->_server->getReceivedRequestFromResponse($response['_InResponseTo']);

            $responseAssertionAttributes = &$response['saml:Assertion']['saml:AttributeStatement'][0]['saml:Attribute'];
            $attributes = Corto_XmlToArray::attributes2array($responseAssertionAttributes);
            unset($attributes['ServiceProvider']);
            $responseAssertionAttributes = Corto_XmlToArray::array2attributes($attributes);

            $sentResponse = $this->_server->createEnhancedResponse($receivedRequest, $response);
            return $this->_server->sendResponseToRequestIssuer($receivedRequest, $sentResponse);
        }
    }

    /**
     * Describes Corto as an IdP to SPs
     *
     * @throws Exception
     * @return void
     */
    public function idPMetadataService()
    {
        $entityDescriptor = array(
            '_xmlns:md' => 'urn:oasis:names:tc:SAML:2.0:metadata',
            'md:EntityDescriptor' => array(
                '_validUntil' => $this->_server->timeStamp(strtotime('tomorrow') - time()),
                '_entityID' => $this->_server->getCurrentEntityUrl('idPMetadataService'),
                'md:IDPSSODescriptor' => array(
                    '_protocolSupportEnumeration' => "urn:oasis:names:tc:SAML:2.0:protocol",
                ),
            )
        );

        $certificates = $this->_server->getCurrentEntitySetting('certificates', array());
        if (isset($certificates['public'])) {
            $entityDescriptor['md:EntityDescriptor']['md:IDPSSODescriptor']['md:KeyDescriptor'] = array(
                array(
                    '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
                    '_use' => 'signing',
                    'ds:KeyInfo' => array(
                        'ds:X509Data' => array(
                            'ds:X509Certificate' => array(
                                '__v' => self::_getCertDataFromPem($certificates['public']),
                            ),
                        ),
                    ),
                ),
                array(
                    '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
                    '_use' => 'encryption',
                    'ds:KeyInfo' => array(
                        'ds:X509Data' => array(
                            'ds:X509Certificate' => array(
                                '__v' => self::_getCertDataFromPem($certificates['public']),
                            ),
                        ),
                    ),
                ),
            );
        }

        $entityDescriptor['md:EntityDescriptor']['md:IDPSSODescriptor']['md:NameIDFormat'] = array(
            '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient'
        );
        $entityDescriptor['md:EntityDescriptor']['md:IDPSSODescriptor']['md:SingleSignOnService'] = array(
            '_Binding' => self::DEFAULT_REQUEST_BINDING,
            '_Location' => $this->_server->getCurrentEntityUrl('singleSignOnService'),
        );

        $xml = Corto_XmlToArray::array2xml($entityDescriptor, 'md:EntitiesDescriptor', true);

        $schemaUrl = 'http://docs.oasis-open.org/security/saml/v2.0/saml-schema-metadata-2.0.xsd';
        if ($this->_server->getConfig('debug', false) && ini_get('allow_url_fopen') && file_exists($schemaUrl)) {
            $dom = new DOMDocument();
            $dom->loadXML($xml);
            if (!$dom->schemaValidate($schemaUrl)) {
                echo '<pre>' . htmlentities(Corto_XmlToArray::formatXml($xml)) . '</pre>';
                throw new Exception('Metadata XML doesnt validate against XSD at Oasis-open.org?!');
            }
        }
        $this->_server->sendHeader('Content-Type', 'application/xml');
        //$this->_server->sendHeader('Content-Type', 'application/samlmetadata+xml');
        $this->_server->sendOutput($xml);
    }

    /**
     * Describes Corto as an SP to IdPs
     *
     * @throws Exception
     * @return void
     */
    public function sPMetadataService()
    {
        $entityDescriptor = array(
            '_xmlns:md' => 'urn:oasis:names:tc:SAML:2.0:metadata',
            'md:EntityDescriptor' => array(
                '_validUntil' => $this->_server->timeStamp(strtotime('tomorrow') - time()),
                '_entityID' => $this->_server->getCurrentEntityUrl('sPMetadataService'),
                'md:SPSSODescriptor' => array(
                    '_protocolSupportEnumeration' => "urn:oasis:names:tc:SAML:2.0:protocol",
                ),
            )
        );

        $certificates = $this->_server->getCurrentEntitySetting('certificates', array());
        if (isset($certificates['public'])) {
            $entityDescriptor['md:EntityDescriptor']['md:SPSSODescriptor']['md:KeyDescriptor'] = array(
                array(
                    '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
                    '_use' => 'signing',
                    'ds:KeyInfo' => array(
                        'ds:X509Data' => array(
                            'ds:X509Certificate' => array(
                                '__v' => self::_getCertDataFromPem($certificates['public']),
                            ),
                        ),
                    ),
                ),
                array(
                    '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
                    '_use' => 'encryption',
                    'ds:KeyInfo' => array(
                        'ds:X509Data' => array(
                            'ds:X509Certificate' => array(
                                '__v' => self::_getCertDataFromPem($certificates['public']),
                            ),
                        ),
                    ),
                ),
            );
        }

        $entityDescriptor['md:EntityDescriptor']['md:SPSSODescriptor']['md:NameIDFormat'] = array(
            '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient'
        );
        $entityDescriptor['md:EntityDescriptor']['md:SPSSODescriptor']['md:AssertionConsumerService'] = array(
            '_Binding' => self::DEFAULT_RESPONSE_BINDING,
            '_Location' => $this->_server->getCurrentEntityUrl('assertionConsumerService'),
            '_index' => '1',
        );

        $xml = Corto_XmlToArray::array2xml($entityDescriptor, 'md:EntitiesDescriptor', true);

        $schemaUrl = 'http://docs.oasis-open.org/security/saml/v2.0/saml-schema-metadata-2.0.xsd';
        if ($this->_server->getConfig('debug', false) && ini_get('allow_url_fopen') && file_exists($schemaUrl)) {
            $dom = new DOMDocument();
            $dom->loadXML($xml);
            if (!$dom->schemaValidate($schemaUrl)) {
                echo '<pre>' . htmlentities(Corto_XmlToArray::formatXml($xml)) . '</pre>';
                throw new Exception('Metadata XML doesnt validate against XSD at Oasis-open.org?!');
            }
        }
        $this->_server->sendHeader('Content-Type', 'application/xml');
        //$this->_server->sendHeader('Content-Type', 'application/samlmetadata+xml');
        $this->_server->sendOutput($xml);
    }

    public function artifactResolutionService()
    {
        $postData = Corto_XmlToArray::xml2array(file_get_contents("php://input"));
        $artifact = $postData['SOAP-ENV:Body']['samlp:ArtifactResolve']['saml:Artifact']['__v'];

        $this->_server->restartSession(sha1($artifact), 'artifact');
        $message = $_SESSION['message'];
        session_destroy();

        $element = $message['__t'];
        $artifactResponse = array(
            'samlp:ArtifactResponse' => array(
                'xmlns:samlp' => 'urn:oasis:names:tc:SAML:2.0:protocol',
                'xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                'ID' => $this->_server->getNewId(),
                'Version' => '2.0',
                'IssueInstant' => $this->_server->timeStamp(),
                'InResponseTo' => $postData['SOAP-ENV:Body']['samlp:ArtifactResolve']['_ID'],

                'saml:Issuer' => array('__v' => $this->_server->getCurrentEntityUrl()),
                $element => $message,
            ),
        );
        $this->_server->getBindingsModule()->_soapResponse($artifactResponse);
    }

    protected function _showWayf($request, $candidateIdPs)
    {
        // Post to the 'continueToIdp' service
        $action = $this->_server->getCurrentEntityUrl('continueToIdP');

        $requestIssuer = $request['saml:Issuer']['__v'];
        $remoteEntity = $this->_server->getRemoteEntity($requestIssuer);

        $output = $this->_server->renderTemplate(
            'discover',
            array(
                'action' => $action,
                'ID' => $request['_ID'],
                'idpList' => $candidateIdPs,
                'metaDataSP' => $remoteEntity,
                'remoteEntities' => $this->_server->getRemoteEntities(),
            ));
        $this->_server->sendOutput($output);
    }

    protected static function _getCertDataFromPem($pemKey)
    {
        $lines = explode("\n", $pemKey);
        $data = '';
        foreach ($lines as $line) {
            $line = rtrim($line);
            if ($line === '-----BEGIN CERTIFICATE-----') {
                $data = '';
            } elseif ($line === '-----END CERTIFICATE-----') {
                break;
            } else {
                $data .= $line . PHP_EOL;
            }
        }
        return $data;
    }

    protected function _hasStoredConsent($serviceProviderEntityId, $response, $responseAttributes)
    {
        try {
            $dbh = $this->_getConsentDatabaseConnection();
            if (!$dbh) {
                return false;
            }

            $attributesHash = $this->_getAttributesHash($responseAttributes);

            $table = $this->_server->getConfig('ConsentDbTable', 'consent');
            $query = "SELECT * FROM {$table} WHERE hashed_user_id = ? AND service_id = ? AND attribute = ?";
            $parameters = array(
                sha1($responseAttributes['uid'][0]),
                $serviceProviderEntityId,
                $attributesHash
            );

            $statement = $dbh->prepare($query);
            $statement->execute($parameters);
            $rows = $statement->fetchAll();

            if (count($rows) !== 1) {
                // No stored consent found
                return false;
            }

            // Update usage date
            $statement = $dbh->prepare("UPDATE {$table} SET usage_date = NOW() WHERE attribute = ?");
            $statement->execute(array($attributesHash));

            return true;
        } catch (PDOException $e) {
            throw new Corto_ProxyServer_Exception("Consent retrieval failed! Error: " . $e->getMessage());
        }
        return false;
    }

    protected function _storeConsent($serviceProviderEntityId, $attributes)
    {
        $dbh = $this->_getConsentDatabaseConnection();
        if (!$dbh) {
            return false;
        }

        $query = "INSERT INTO consent (usage_date, hashed_user_id, service_id, attribute)
                  VALUES (NOW(), ?, ?, ?)
                  ON DUPLICATE KEY UPDATE usage_date=VALUES(usage_date), attribute=VALUES(attribute)";
        $parameters = array(
            sha1($attributes['uid'][0]),
            $serviceProviderEntityId,
            $this->_getAttributesHash($attributes)
        );

        $statement = $dbh->prepare($query);
        if (!$statement->execute($parameters)) {
            throw new Corto_Module_Services_Exception("Error storing consent: " . var_export($statement->errorInfo(), true));
        }

        return true;
    }

    /**
     * @return bool|PDO
     */
    protected function _getConsentDatabaseConnection()
    {
        $consentDbDsn = $this->_server->getConfig('ConsentDbDsn', false);
        if (!$consentDbDsn) {
            return false;
        }

        $dbh = new PDO(
            $consentDbDsn,
            $this->_server->getConfig('ConsentDbUser', ''),
            $this->_server->getConfig('ConsentDbPassword', '')
        );
        return $dbh;
    }

    protected function _getAttributesHash($attributes)
    {
        $hashBase = NULL;
        if ($this->_server->getConfig('ConsentStoreValues', true)) {
            ksort($attributes);
            $hashBase = serialize($attributes);
        } else {
            $names = array_keys($attributes);
            sort($names);
            $hashBase = implode('|', $names);
        }
        return sha1($hashBase);
    }
}
