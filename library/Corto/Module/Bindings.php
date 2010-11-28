<?php

/**
 * @internal include the abstract baseclass
 */
require_once 'Abstract.php';

/**
 * Class for binding module specific exceptions.
 * @author Boy
 */
class Corto_Module_Bindings_Exception extends Corto_ProxyServer_Exception {

}

/**
 * Class for binding module verification exceptions.
 * @author Boy
 */
class Corto_Module_Bindings_VerificationException extends Corto_Module_Bindings_Exception {

}

/**
 * The bindings module for Corto, which implements support for various data
 * bindings.
 * @author Boy
 */
class Corto_Module_Bindings extends Corto_Module_Abstract {
    const ARTIFACT_BINARY_FORMAT = 'ntypecode/nendpointindex/H40sourceid/H40messagehandle';

    const SAMLArt = 'SAMLArt';
    const SAMLRequest = 'SAMLRequest';
    const SAMLResponse = 'SAMLResponse';
    const RSAPKeyBegin = "-----BEGIN RSA PRIVATE KEY-----\n";
    const RSAPKeyEnd = "-----END RSA PRIVATE KEY-----";
    const BeginCert = "-----BEGIN CERTIFICATE-----\n";
    const EndCert = "-----END CERTIFICATE-----";

    const HTTPRedirect = 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect';
    const HTTPPOST = 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST';
    const SOAP = 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP';
    const Internal = 'INTERNAL';
    const JSONRedirect = 'JSON-Redirect';
    const JSONPOST = 'JSON-POST';
    const MDRequest = 'MDRequest';
    const HTTPPostSimpleSign = 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST-SimpleSign';
    const HTTPArtifact = 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact';
    const URI = 'urn:oasis:names:tc:SAML:2.0:bindings:URI';

    /**
     * Supported bindings in Corto.
     * @var array
     */
    protected $_bindings = array(
        self::HTTPRedirect => 'HTTPRedirect',
        self::HTTPPOST => 'HTTPPOST',
        #self::HTTPPostSimpleSign => 'HTTPPostSimpleSign',
        self::HTTPArtifact => 'HTTPArtifact',
        #self::URI => 'URI',
        self::SOAP => 'SOAP',
        self::Internal => 'Internal',
        self::JSONRedirect => 'JSONRedirect',
        self::JSONPOST => 'JSONPOST',
        self::MDRequest => 'MDRequest',
        null => 'HTTPPOST',
    );

    /**
     * Process an incoming SAML request message. The data is retrieved automatically
     * depending on the binding used.
     */
    public function receiveRequest($params, $key = self::SAMLRequest)
    {
        $function = '_receive' . $this->_bindings[$params['Binding']];
        $request = $this->$function($key, $params);
        if ($request['__']['paramname'] == self::SAMLRequest) {
            $request['_ForceAuthn'] = isset($request['_ForceAuthn']) && ($request['_ForceAuthn'] == 'true' || $request['_ForceAuthn'] == '1');
            $request['_IsPassive'] = isset($request['_IsPassive']) && ($request['_IsPassive'] == 'true' || $request['_IsPassive'] == '1');
            $this->_server->getSessionLog()->debug("Received request: " . var_export($request, true));
        }
        $request['__']['Binding'] = $params['Binding'];
        #print_r($request);
        $this->_verifyRequest($request);
        return $request;
    }

    /**
     * Process an incoming SAML response message.
     */
    public function receiveResponse($params)
    {
        $function = '_receive' . $this->_bindings[$params['Binding']];
        $response = $this->$function(self::SAMLResponse, $params);
        $this->_server->getSessionLog()->debug("Received response: " . var_export($response, true));

        $this->_decryptResponse($response);
        $this->_verifyResponse($response);
        $this->_server->saveSloInfo($response);
        return $response;
    }

    /**
     * Process an incoming logout request or response message.
     */
    public function receiveLogoutMessage($params)
    {
        $function = '_receive' . $this->_bindings[$params['Binding']];
        if ($message = $this->$function(self::SAMLRequest, $params)) {
            $this->_verifyRequest($message);
        } else {
            $message = $this->$function(self::SAMLResponse, $params);
        }
        $this->_server->getSessionLog()->debug("Received logout Messsage: " . var_export($message, true));
        return $message;
    }

    /**
     * Common receiver for all Post and Redirect bindings
     * @param  $key
     * @param  $params
     * @return array|mixed
     */
    protected function _receiveCommon($key, $params)
    {
        $binding = $params['Binding'];
        $post = $binding == self::HTTPPOST || $binding == self::JSONPOST;
        $deflate = $binding == self::HTTPRedirect || $binding == self::JSONRedirect;
        $json = $binding == self::JSONRedirect || $binding == self::JSONPOST;
        $req = $post ? $_POST : $_GET;
        $message = base64_decode($req[$key]);
        if ($deflate) {
            $message = gzinflate($message);
        }
        if ($json) {
            $messageArray = json_decode($message, 1);
        } else {
            $messageArray = Corto_XmlToArray::xml2array($message);

        }
        $messageArray['__'] = array(
            'RelayState' => nvl($req, 'RelayState'),
            'Signature' => nvl($req, 'Signature'),
            'SigningAlgorithm' => nvl($req, 'SigAlg'),
            'Raw' => $message,
            'paramname' => $key,
        );
        return $messageArray;
    }

    protected function _receiveHTTPPOST($key, $params)
    {
        return $this->_receiveCommon($key, $params);
    }

    protected function _receiveHTTPRedirect($key, $params)
    {
        return $this->_receiveCommon($key, $params);
    }

    protected function _receiveJSONPOST($key, $params)
    {
        return $this->_receiveCommon($key, $params);
    }

    protected function _receiveJSONRedirect($key, $params)
    {
        return $this->_receiveCommon($key, $params);
    }

    /**
     * Receive a message using the 'internal' binding ie. don't send
     * the response out of Corto. Used between two co-hosted entities.
     *
     * @todo make clear that co-hosting demands access to commmon cookie!
     *
     * @param  $key
     * @return
     */

    protected function _receiveMessageFromInternalBinding($key)
    {
        return $_REQUEST[$key];
    }

    /**
     * Retrieve a message via artifact binding.
     * @param String $key The key to look for.
     * @return mixed False if there was no suitable message in this binding
     *               String the message if it was found
     *               An exception if something went wrong.
     */

    protected function _receiveMessageFromArtifact($key)
    {
        $artifacts = base64_decode($_REQUEST[self::SAMLArt]);
        $artifacts = unpack(self::ARTIFACT_BINARY_FORMAT, $artifacts);

        $issuer = $this->_server->getCurrentMD('EntityID');

        $artifactResolveMessage = array(
            'samlp:ArtifactResolve' => array(
                '_xmlns:samlp' => 'urn:oasis:names:tc:SAML:2.0:protocol',
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_ID' => $this->_server->getNewId(),
                '_Version' => '2.0',
                '_IssueInstant' => $this->_server->timeStamp(),
                'saml:Artifact' => array('__v' => $_REQUEST['SAMLArt']),
                'saml:Issuer' => array('__v' => $issuer),
            ),
        );

        $artifactResolutionService = nvl($this->_server->getRemoteEntity($artifacts['sourceid']), $artifacts['endpointindex']);

        $artifactResponse = $this->_soapRequest($artifactResolutionService, $artifactResolveMessage);

        if ($message = nvl($artifactResponse['samlp:ArtifactResponse'], 'samlp:AuthnRequest')) {
            $message[Corto_XmlToArray::TAG_NAME_KEY] = 'samlp:AuthnRequest';
        } elseif ($message = nvl($artifactResponse['samlp:ArtifactResponse'], 'samlp:Response')) {
            $message[Corto_XmlToArray::TAG_NAME_KEY] = 'samlp:Response';
        }
        ;

        $relayState = $_REQUEST['RelayState'];
        $message['__']['RelayState'] = $relayState;

        return $message;
    }

    /**
     * Take a message out of its SOAP envelope.
     *
     * @param  $key
     * @return
     */
    protected function _receiveSOAP($key)
    {
        $postdata = Corto_XmlToArray::xml2array(file_get_contents("php://input"));
        $req = $postdata['SOAP-ENV:Body'][0]['samlp:' . $key][0];
        $req['__t'] = $key;
        return $req;
    }

    /**
     * Verify that a request has a valid signature (if required), that
     * the issuer is a known entity and that the message is destined for
     * us. Throws an exception if any of these conditions are not met.
     * @param array $request The array with request data
     * @throws Corto_Module_Bindings_VerificationException if any of the
     * verifications fail
     */
    protected function _verifyRequest(array $request)
    {
        $remoteEntity = $this->_verifyKnownIssuer($request);

        if ($this->_server->getRemoteMD($remoteEntity, 'SP', 'AuthnRequestsSigned', null, false) ||
                ($this->_server->getCurrentMD('IDP', 'WantAuthnRequestsSigned', null, false))) {
            $this->_verifySignature($request, self::SAMLRequest);
        }

        $this->_verifyMessageDestinedForUs($request);
    }

    /**
     * Verify if a message has an issuer that is known to us. If not, it
     * throws a Corto_Module_Bindings_VerificationException.
     * @param array $message
     * @throws Corto_Module_Bindings_VerificationException
     */
    protected function _verifyKnownIssuer($message)
    {
        $messageIssuer = $message['saml:Issuer']['__v'];
        $remoteEntity = $this->_server->getRemoteMD($messageIssuer, 'entityID');
        if ($remoteEntity === null) {
            throw new Corto_Module_Bindings_VerificationException("Issuer '{$messageIssuer}' is not a known remote entity? (please add SP/IdP to Remote Entities)");
        }
        return $remoteEntity;
    }

    /**
     * Encrypt an element using a particular public key.
     * @param String $publicKey The public key used for encryption.
     * @param array $element An array representation of an xml fragment
     * @param unknown_type $tag ???
     * @return array The encrypted version of the element.
     */
    protected function _encryptElement($publicKey, $element, $tag = null)
    {
        if ($tag) {
            $element['__t'] = $tag;
        }
        $data = Corto_XmlToArray::array2xml($element);

        $encryptedData = $this->_encrypt($data);

        $publicKey = openssl_pkey_get_public($publicKey);
        openssl_public_encrypt($sessionkey, $encryptedKey, $publicKey, OPENSSL_PKCS1_PADDING);
        openssl_free_key($publicKey);

        $encryptedElement = array(
            'xenc:EncryptedData' => array(
                '_xmlns:xenc' => 'http://www.w3.org/2001/04/xmlenc#',
                '_Type' => 'http://www.w3.org/2001/04/xmlenc#Element',
                'ds:KeyInfo' => array(
                    '_xmlns:ds' => "http://www.w3.org/2000/09/xmldsig#",
                    'xenc:EncryptedKey' => array(
                        '_Id' => $this->_server->getNewId(),
                        'xenc:EncryptionMethod' => array(
                            '_Algorithm' => "http://www.w3.org/2001/04/xmlenc#rsa-1_5"
                        ),
                        'xenc:CipherData' => array(
                            'xenc:CipherValue' => array(
                                '__v' => base64_encode($encryptedKey),
                            ),
                        ),
                    ),
                ),
                'xenc:EncryptionMethod' => array(
                    '_Algorithm' => 'http://www.w3.org/2001/04/xmlenc#aes128-cbc',
                ),
                'xenc:CipherData' => array(
                    'xenc:CipherValue' => array(
                        '__v' => base64_encode($encryptedData),
                    ),
                ),
            ),
        );
        return $encryptedElement;
    }

    /**
     * Decrypt a response message
     * @param array $response The response to decrypt.
     */
    protected function _decryptResponse(array &$response)
    {
        if (isset($response['saml:EncryptedAssertion'])) {
            $encryptedAssertion = $response['saml:EncryptedAssertion'];

            $response['saml:Assertion'] = $this->_decryptElement(
                $this->_server->getCurrentMD('IDP', 'encryption', 'X509Privatekey'),
                $encryptedAssertion
            );
        }
    }

    /**
     * Decrypt an xml fragment.
     * @param String $privateKey The private key to use to decrypt the
     *                           elements.
     * @param array $element Array representation of an xml fragment
     * @param Bool $returnAsXML If true, the method returns an xml string.
     *                          If false (default), it returns an array
     *                          representation of the xml fragment.
     * @return String|Array The decrypted element (as an array or string
     *                      depending on the returnAsXml parameter.
     */
    protected function _decryptElement($privateKey, $element, $returnAsXML = false)
    {
        $encryptedKey = base64_decode($element['xenc:EncryptedData']['ds:KeyInfo']['xenc:EncryptedKey']['xenc:CipherData']['xenc:CipherValue']['__v']);
        $encryptedData = base64_decode($element['xenc:EncryptedData']['xenc:CipherData']['xenc:CipherValue']['__v']);

        openssl_private_decrypt($encryptedKey, $sessionKey, $privateKey, OPENSSL_PKCS1_PADDING);
        openssl_free_key($privateKey);

        $cipher = mcrypt_module_open(MCRYPT_RIJNDAEL_128, '', MCRYPT_MODE_CBC, '');
        $ivSize = mcrypt_enc_get_iv_size($cipher);
        $iv = substr($encryptedData, 0, $ivSize);

        mcrypt_generic_init($cipher, $sessionKey, $iv);

        $decryptedData = mdecrypt_generic($cipher, substr($encryptedData, $ivSize));
        mcrypt_generic_deinit($cipher);
        mcrypt_module_close($cipher);

        if ($returnAsXML) {
            return $decryptedData;
        }
        return Corto_XmlToArray::xml2array($decryptedData);
    }

    /**
     * Verify that a response has a valid signature (if required), that
     * the issuer is a known entity, that the message is destined for
     * us and that the timings in the response is valid.
     * Throws an exception if any of these conditions are not met.
     * @param array $response The array with response data
     * @throws Corto_Module_Bindings_VerificationException if any of the
     * verifications fail
     */
    protected function _verifyResponse(array $response)
    {
        $this->_verifyKnownIssuer($response);

        if ($this->_server->getCurrentMD('WantAssertionsSigned', null, null, false)) {
            $this->_verifySignature($response, self::SAMLResponse);
        }
        $this->_verifyMessageDestinedForUs($response);
        $this->_verifyTimings($response);
    }

    /**
     * Verify the signature of the message being either a $_GET['Signature'] for
     * the redirect binding or an embedded signature for post and artifact
     * binding.
     *
     * @param  $message
     * @param  $key
     * @return bool
     */
    protected function _verifySignature(array $message, $key)
    {
        if (isset($message['__']['Signature'])) { // We got a Signature in the URL (HTTP Redirect)
            return $this->_verifySignatureMessage($message, $key);
        }

        // Otherwise it's in the message or in the assertion in the message (HTTP Post Response)
        $messageIssuer = $message['saml:Issuer']['__v'];
        $remoterole = $key == self::SAMLRequest ? 'IDP' : 'SP';
        $publicKey = $this->_server->getRemoteMD($messageIssuer, $remoterole, 'signing', 'X509Certificate');

        $messageVerified = $this->_verifySignatureXMLElement(
            $publicKey,
            $message['__']['Raw'],
            $message
        );

        if (!isset($message['saml:Assertion'])) {
            return $messageVerified;
        }

        $assertionVerified = $this->_verifySignatureXMLElement(
            $publicKey,
            $message['__']['Raw'],
            $message['saml:Assertion']
        );
        return ($messageVerified || $assertionVerified);
    }

    /**
     * Verify the $_GET['Signature'] in a message
     *
     * @throws Corto_Module_Bindings_VerificationException
     * @param  $message
     * @param  $key
     * @return
     */
    protected function _verifySignatureMessage($message, $key)
    {
        $rawGet = $this->_server->getRawGet();

        $queryString = "$key=" . $rawGet[$key];
        if (isset($rawGet['RelayState'])) {
            $queryString .= '&RelayState=' . $rawGet['RelayState'];
        }
        $queryString .= '&SigAlg=' . $rawGet['SigAlg'];

        $issuer = $message['saml:Issuer']['__v'];
        $remoterole = $key == self::SAMLRequest ? 'SP' : 'IDP';
        $publicKey = $this->_server->getRemoteMD($issuer, $remoterole, 'signing', 'X509Certificate');

        # print_r(get_defined_vars());

        $key = openssl_pkey_get_public(self::BeginCert . $publicKey . self::EndCert);

        $verified = openssl_verify(
            $queryString,
            base64_decode($message['__']['Signature']),
            $key
        );

        if (!$verified) {
            throw new Corto_Module_Bindings_VerificationException("Invalid signature");
        }

        return ($verified === 1);
    }

    /**
     * Verify the embedded signature in an element
     *
     * @param  $publicKey
     * @param  $xml
     * @param  $element
     * @return bool
     *
     */
    protected function _verifySignatureXMLElement($publicKey, $xml, $element)
    {
        $signatureValue = base64_decode($element['ds:Signature']['ds:SignatureValue']['__v']);
        $digestValue = base64_decode($element['ds:Signature']['ds:SignedInfo']['ds:Reference']['ds:DigestValue']['__v']);

        $document = DOMDocument::loadXML($xml);
        $xp = new DomXPath($document);
        $xp->registerNamespace('ds', 'http://www.w3.org/2000/09/xmldsig#');

        $id = $element['_ID'];
        $signedElement = $xp->query("//*[@ID = '$id']")->item(0);
        $signature = $xp->query(".//ds:Signature", $signedElement)->item(0);
        $signedInfo = $xp->query(".//ds:SignedInfo", $signature)->item(0)->C14N(true, false);
        $signature->parentNode->removeChild($signature);
        $canonicalXml = $signedElement->C14N(true, false);

        $digestMatches = (sha1($canonicalXml, TRUE) == $digestValue);
        if (!$digestMatches) {
            return false;
        }
        return (openssl_verify($signedInfo, $signatureValue, $publicKey) == 1);
    }

    /**
     * Verify that we are the destination for a message
     *
     * @throws Corto_Module_Bindings_VerificationException
     * @param  $message
     * @return void
     */
    protected function _verifyMessageDestinedForUs(array $message)
    {
        if ($destination = nvl($message, '_Destination')) { // Destination is optional
            if ($this->_server->selfDestination() != $destination) {
                throw new Corto_Module_Bindings_VerificationException("Destination: '$destinationId' is not here; message not destined for us");
            }
        }
    }

    /**
     * Verify that the timings in a message is ok
     *
     * @throws Corto_Module_Bindings_Exception
     * @param  $message
     * @return bool
     */
    protected function _verifyTimings(array $message)
    {
        // just use string cmp all times in ISO like format without timezone (but everybody appends a Z anyways ...)
        $skew = $this->_server->getCurrentMD('max_age_seconds', null, null, 300);
        $aShortWhileAgo = $this->_server->timeStamp(-$skew);
        $inAShortWhile = $this->_server->timeStamp($skew);
        $issues = array();

        // Check SAMLResponse SubjectConfirmation timings

        if (isset($message['saml:Assertion']['saml:Subject']['saml:SubjectConfirmation']['saml:SubjectConfirmationData']['_NotBefore'])) {
            if ($inAShortWhile < $message['saml:Assertion']['saml:Subject']['saml:SubjectConfirmation']['saml:SubjectConfirmationData']['_NotBefore']) {
                $issues[] = 'SubjectConfirmation not valid yet';
            }
        }

        if (isset($message['saml:Assertion']['saml:Subject']['saml:SubjectConfirmation']['saml:SubjectConfirmationData']['_NotOnOrAfter'])) {
            if ($aShortWhileAgo > $message['saml:Assertion']['saml:Subject']['saml:SubjectConfirmation']['saml:SubjectConfirmationData']['_NotOnOrAfter']) {
                $issues[] = 'SubjectConfirmation too old';
            }
        }

        // Check SAMLResponse Conditions timings

        if (isset($message['saml:Assertion']['saml:Conditions']['_NotBefore'])) {
            if ($inAShortWhile < $message['saml:Assertion']['saml:Conditions']['_NotBefore']) {
                $issues[] = 'Assertion Conditions not valid yet';
            }
        }

        if (isset($message['saml:Assertion']['saml:Conditions']['_NotOnOrAfter'])) {
            if ($aShortWhileAgo > $message['saml:Assertion']['saml:Conditions']['_NotOnOrAfter']) {
                $issues[] = 'Assertions Condition too old';
            }
        }

        // Check SAMLResponse AuthnStatement timing

        if (isset($message['saml:Assertion']['saml:AuthnStatement']['_SessionNotOnOrAfter'])) {
            if ($aShortWhileAgo > $message['saml:Assertion']['saml:AuthnStatement']['_SessionNotOnOrAfter']) {
                $issues[] = 'AuthnStatement Session too old';
            }
        }

        if (!empty($issues)) {
            $message = 'Problems detected with timings! Please check if your server has the correct time set.';
            $message .= ' Issues: ' . implode(PHP_EOL, $issues);
            throw new Corto_Module_Bindings_Exception($message);
        }
        return true;
    }

    /**
     * Send a soap request and return the resulting response without
     * the enclosing soap envelope.
     *
     * @param  $soapServiceUrl
     * @param  $body
     * @return
     */
    protected function _soapRequest($soapServiceUrl, $body)
    {
        $soapEnvelope = array(
            '__t' => 'SOAP-ENV:Envelope',
            '_xmlns:SOAP-ENV' => "http://schemas.xmlsoap.org/soap/envelope/",
            'SOAP-ENV:Body' => array($body['__t'] => $body),
        );

        $curlOptions = array(
            CURLOPT_URL => $soapServiceUrl,
            CURLOPT_HTTPHEADER => array('SOAPAction: ""'),
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_SSL_VERIFYPEER => FALSE,
            CURLOPT_POSTFIELDS => Corto_XmlToArray::array2xml($soapEnvelope),
            CURLOPT_HEADER => 0,
        );

        $curlHandler = curl_init();
        curl_setopt_array($curlHandler, $curlOptions);
        $curlResult = curl_exec($curlHandler);

        $soapResponse = Corto_XmlToArray::xml2array($curlResult);

        return $soapResponse['SOAP-ENV:Body'];
    }

    /**
     * Send a response as a soap message by embedding it in a soap
     * envelope.
     * @param  $body
     * @return void
     */
    protected function _soapResponse(array $body)
    {
        $soapResponse = array(
            '__t' => 'SOAP-ENV:Envelope',
            '_xmlns:SOAP-ENV' => "http://schemas.xmlsoap.org/soap/envelope/",
            'SOAP-ENV:Body' => array($body['__t'] => $body),
        );

        $xml = Corto_XmlToArray::array2xml($soapResponse);

        $this->_server->sendHeader('Content-Type', 'application/xml');
        $this->_server->sendOutput($xml);
    }

    /**
     * Send a message using the protocolbinding stated in the corto
     * private ('__') part of the message.
     *
     * @throws Corto_Module_Bindings_Exception
     * @param  $message
     * @param  $remoteEntity
     * @return void
     */
    public function send(array $message, $remoteEntity)
    {
        $bindingUrn = $message['__']['ProtocolBinding'];

        if (!isset($this->_bindings[$bindingUrn])) {
            throw new Corto_Module_Bindings_Exception('Unknown binding: ' . $bindingUrn);
        }
        $function = '_send' . $this->_bindings[$bindingUrn];

        $this->$function($message, $remoteEntity);
    }

    /**
     * Respond using the protocolbinding stated in the corto private
     * )'__') part of the message.
     *
     * @throws Corto_Module_Bindings_Exception
     * @param  $message
     * @param  $remoteEntity
     * @return void
     *
     */
    public function respond(array $message, array $remoteEntity)
    {
        $bindingUrn = $message['__']['ProtocolBinding'];

        if (!isset($this->_bindings[$bindingUrn])) {
            throw new Corto_Module_Bindings_Exception('Unknown binding: ' . $bindingUrn);
        }
        $binding = $this->_bindings[$bindingUrn];
        if ($binding == 'SOAP') {
            $function = '_respond' . $binding;
        } else {
            $function = '_send' . $binding;
        }
        $this->$function($message, $remoteEntity);
    }

    protected function _sendCommon($message, $remoteEntity)
    {
        $binding = $message['__']['ProtocolBinding'];
        $messageType = $message['__']['paramname'];

        $json = $binding == self::JSONRedirect || $binding == self::JSONPOST;
        unset($message['ds:Signature']);
        // Determine if we should sign the message
        $sign = ($messageType === self::SAMLRequest
                && ($this->_server->getRemoteMD($remoteEntity, 'IDP', 'WantAuthnRequestsSigned', null, false)
                        || $this->_server->getCurrentMD('SP', 'AuthnRequestsSigned', null, false)));

        if ($json) {
            $encodedMessage = json_encode($message);
        } else {
            $encodedMessage = Corto_XmlToArray::array2xml($message);
        }

        // Encode the message for transfer
        $encodedMessage = urlencode(base64_encode(gzdeflate($encodedMessage)));

        // Build the query string
        $queryString = "$messageType=" . $encodedMessage
                . (nvl($message['__'], 'RelayState') ? '&RelayState=' . urlencode($message['__']['RelayState']) : "");

        // Sign the message
        if ($sign) {
            /**
             * DSAwithSHA1 – http://www.w3.org/2000/09/xmldsig#dsa-sha1
             * RSAwithSHA1 – http://www.w3.org/2000/09/xmldsig#rsa-sha1
             */
            $queryString .= '&SigAlg=' . urlencode('http://www.w3.org/2000/09/xmldsig#rsa-sha1');

            $privatekey = $this->_server->getCurrentMD('SP', 'signing', 'X509Privatekey');

            $key = openssl_pkey_get_private(self::RSAPKeyBegin . chunk_split($privatekey, 64) . self::RSAPKeyEnd);

            $signature = "";
            openssl_sign($queryString, $signature, $key, OPENSSL_ALGO_SHA1);
            openssl_free_key($key);

            $queryString .= '&Signature=' . urlencode(base64_encode($signature));
        }

        // Build the full URL
        $location = nvl($message, '_Destination');
        $location .= "?" . $queryString;

        // Redirect
        $this->_server->redirect($location, $message);
    }

    /**
     * Send a message using the HTTP-Post binding.
     *
     * @param  $message
     * @param  $remoteEntity
     * @return void
     */
    protected function _sendHTTPPOST($message, $remoteEntity)
    {
       # print_r($message);;
        $name = $message['__t'];
        if ($name == 'samlp:AuthnRequest'
                && ($this->_server->getRemoteMD($remoteEntity, 'IDP', 'WantAuthnRequestsSigned', null, false)
                        || $this->_server->getCurrentMD('SP', 'AuthnRequestsSigned', null, false))) {
            $privatekey = $this->_server->getCurrentMD('SP', 'signing', 'X509Privatekey');
            $message = $this->_sign($privatekey, $message);
        } elseif ($name == 'samlp:Response') {
            if ($this->_server->getRemoteMD($remoteEntity, 'SP', 'WantAssertionsSigned', null, false)) {
                $privatekey = $this->_server->getCurrentMD('IDP', 'signing', 'X509Privatekey');
                $certificate = $this->_server->getCurrentMD('IDP', 'signing', 'X509Certificate');
                $message['saml:Assertion']['__t'] = 'saml:Assertion';
                $message['saml:Assertion']['_xmlns:saml'] = "urn:oasis:names:tc:SAML:2.0:assertion";
                ksort($message['saml:Assertion']);

                $message['saml:Assertion'] = $this->_sign($privatekey, $certificate, $message['saml:Assertion']);
                ksort($message['saml:Assertion']);
            }
            if ($this->_server->getRemoteMD($remoteEntity, 'SP', 'WantResponsesSigned', null, false)) {
                $privatekey = $this->_server->getCurrentMD('IDP', 'signing', 'X509Privatekey');
                $certificate = $this->_server->getCurrentMD('IDP', 'signing', 'X509Certificate');
                $message = $this->_sign($privatekey, $certificate, $message);
            }
        }
        #print_r($message); exit;

        $encodedMessage = Corto_XmlToArray::array2xml($message);
        #print_r($encodedMessage); exit;
        if ($this->_server->getCurrentMD('debug', null, null, false)) {
            $dom = new DOMDocument();
            $dom->loadXML($encodedMessage);
            if (!$dom->schemaValidate('http://docs.oasis-open.org/security/saml/v2.0/saml-schema-protocol-2.0.xsd')) {
                //echo '<pre>'.htmlentities(Corto_XmlToArray::formatXml($encodedMessage)).'</pre>';
                //throw new Exception('Message XML doesnt validate against XSD at Oasis-open.org?!');
            } else if ($name == 'SAMLResponse' && isset($remoteEntity['WantsResponsesSigned']) && $remoteEntity['WantsResponsesSigned']) {
                $privatekey = $this->_server->getCurrentMD('IDP', 'signing', 'X509Privatekey');
                $certificate = $this->_server->getCurrentMD('IDP', 'signing', 'X509Certificate');
                $message = $this->_sign($privatekey, $certificate, $message);
            }

            $encodedMessage = Corto_XmlToArray::array2xml($message);

            $schemaUrl = 'http://docs.oasis-open.org/security/saml/v2.0/saml-schema-protocol-2.0.xsd';
            if ($this->_server->getCurrentMD('debug') && ini_get('allow_url_fopen') && file_exists($schemaUrl)) {
                $dom = new DOMDocument();
                $dom->loadXML($encodedMessage);
                if (!$dom->schemaValidate($schemaUrl)) {
                    //echo '<pre>'.htmlentities(Corto_XmlToArray::formatXml($encodedMessage)).'</pre>';
                    //throw new Exception('Message XML doesnt validate against XSD at Oasis-open.org?!');
                }
            }
        }

        $extra = isset($message['__']['RelayState']) ? '<input type="hidden" name="RelayState" value="' . htmlspecialchars($message['__']['RelayState']) . '">' : '';
        $encodedMessage = htmlspecialchars(base64_encode($encodedMessage));

        $action = $message['_Destination'] . (isset($message['_Recipient']) ? $message['_Recipient'] : '');
        $output = $this->_server->renderTemplate(
            'form',
            array(
                'action' => $action,
                'message' => $encodedMessage,
                'xtra' => $extra,
                'name' => $message['__']['paramname'],
                #                'trace' => $this->_server->getConfig('debug', false) ? htmlentities(Corto_XmlToArray::formatXml(Corto_XmlToArray::array2xml($message))) : '',
                #                'trace' => htmlentities(Corto_XmlToArray::formatXml(Corto_XmlToArray::array2xml($message))),
                #'trace' => htmlentities(print_r($message, 1)),
                'trace' => false,
            ));
        $this->_server->sendOutput($output);
        exit;
    }

    /**
     * Send a message using the HTTP-Redirect binding.
     * @param  $message
     * @param  $remoteEntity
     * @return void
     */
    protected function _sendHTTPRedirect(array $message, $remoteEntity)
    {
        $this->_sendCommon($message, $remoteEntity);
    }

    /**
     * Send a message using the soap binding
     * @param  $message
     * @param  $remoteEntity
     * @return
     */
    protected function _sendSOAP(array $message, array $remoteEntity)
    {
        $body = $message; #Corto_XmlToArray::array2xml($message);
        $soapServiceUrl = $message['_Destination'];
        return $this->_soapRequest($soapServiceUrl, $body);
    }

    /**
     * Send a response using the soap binding.
     * @param  $message
     * @param  $remoteEntity
     * @return void
     */
    protected function _respondSOAP(array $message, array $remoteEntity)
    {
        $body = $message; #Corto_XmlToArray::array2xml($message);
        $soapServiceUrl = $message['_Destination'];
        return $this->_soapResponse($body);
    }

    /**
     * Send a message using the JSON-Redirect binding.
     * @param  $message
     * @param  $remoteEntity
     * @return void
     */
    protected function _sendJSONRedirect(array $message, $remoteEntity)
    {
        $this->_sendCommon($message, $remoteEntity);
    }

    /**
     * Send a message using the internal binding.
     * @param  $message
     * @param  $remoteEntity
     * @return void
     */
    public function _sendInternal($message, $remoteEntity)
    {
        // Store the message
        $_REQUEST[$message['__']['paramname']] = $message;
        $this->_server->serveRequest($message['_Destination']);

        /*

          $parameters = $this->_server->getParametersFromUrl($destinationLocation);
          $this->_server->setCurrentEntity($parameters['EntityID'], $parameters['Federation']);

          $this->_server->getSessionLog()->debug("Using internal binding for destination: $destinationLocation, resulting in parameters: " . var_export($parameters, true));

          $serviceName = $parameters['ServiceName'];

          $this->_server->getSessionLog()->debug("Calling service '$serviceName'");
          $this->_server->getServicesModule()->$serviceName();
          $this->_server->getSessionLog()->debug("Done calling service '$serviceName'");

          */
    }

    /**
     * Sign an element using $key
     * @param  $key
     * @param  $element
     * @return
     */
    protected function _sign($privatekey, $certificate, $element)
    {
        $signature = array(
            '__t' => 'ds:Signature',
            '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
            'ds:SignedInfo' => array(
                '__t' => 'ds:SignedInfo',
                '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
                'ds:CanonicalizationMethod' => array(
                    '_Algorithm' => 'http://www.w3.org/2001/10/xml-exc-c14n#',
                ),
                'ds:SignatureMethod' => array(
                    '_Algorithm' => 'http://www.w3.org/2000/09/xmldsig#rsa-sha1',
                ),
                'ds:Reference' => array(
                    '_URI' => '__placeholder__',
                    'ds:Transforms' => array(
                        'ds:Transform' => array(
                            array(
                                '_Algorithm' => 'http://www.w3.org/2000/09/xmldsig#enveloped-signature',
                            ),
                            array(
                                '_Algorithm' => 'http://www.w3.org/2001/10/xml-exc-c14n#',
                            ),
                        ),
                    ),
                    'ds:DigestMethod' => array(
                        '_Algorithm' => 'http://www.w3.org/2000/09/xmldsig#sha1',
                    ),
                    'ds:DigestValue' => array(
                        '__v' => '__placeholder__',
                    ),
                ),
            ),
        );

        $canonicalXml = DOMDocument::loadXML(Corto_XmlToArray::array2xml($element))->firstChild->C14N(true, false);

        $signature['ds:SignedInfo']['ds:Reference']['ds:DigestValue']['__v'] = base64_encode(sha1($canonicalXml, TRUE));
        $signature['ds:SignedInfo']['ds:Reference']['_URI'] = "#" . $element['_ID'];

        $canonicalXml2 = DOMDocument::loadXML(Corto_XmlToArray::array2xml($signature['ds:SignedInfo']))->firstChild->C14N(true, false);

        $key = openssl_pkey_get_private(self::RSAPKeyBegin . chunk_split($privatekey, 64) . self::RSAPKeyEnd);

        openssl_sign($canonicalXml2, $signatureValue, $key);

        openssl_free_key($key);
        $signature['ds:SignatureValue']['__v'] = base64_encode($signatureValue);
        $signature['ds:KeyInfo']['ds:X509Data']['ds:X509Certificate']['__v'] = $certificate;
        $element['ds:Signature'] = $signature;
        foreach($element as $tag => $item) {
            if ($tag == 'ds:Signature') continue;
            $newelement[$tag] = $item;
            if ($tag == 'saml:Issuer') $newelement['ds:Signature'] = $signature;
        }
        #print_r($newelement); exit;
        return $newelement;
    }

}
