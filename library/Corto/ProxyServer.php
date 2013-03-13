<?php

/**
 *
 */
require 'XmlToArray.php';
require '../library/Corto/cortolib.php';

class Corto_ProxyServer_Exception extends Exception {
}

/**
 * ProxyServer is the main controller in Corto. It coordinates receiving
 * and servicing SAML messages using the injected bindings and services
 * modules.
 *
 * @throws Corto_ProxyServer_Exception
 *
 */

class Corto_ProxyServer {
    const MODULE_BINDINGS = 'Bindings';
    const MODULE_SERVICES = 'Services';

    const TEMPLATE_SOURCE_FILESYSTEM = 'filesystem';
    const TEMPLATE_SOURCE_MEMORY = 'memory';

    const MESSAGE_TYPE_REQUEST = 'SAMLRequest';
    const MESSAGE_TYPE_RESPONSE = 'SAMLResponse';

    protected $_server;
    protected $_metadatapath;
    protected $_cortoinstance;
    protected $_hosted;
    protected $_cohosted;
    protected $_systemLog;
    protected $_sessionLog;
    protected $_sessionLogDefault;

    protected $_metadata = array();

    protected $_modules = array();
    protected $_templatePath;

    public function __construct()
    {
        $this->_server = $this;
    }

    //////// GETTERS / SETTERS /////////

    /**
     * @return Corto_Module_Bindings
     */
    public function getBindingsModule()
    {
        return $this->_getModule(self::MODULE_BINDINGS);
    }

    /**
     * @param Corto_Module_Bindings $bindingsInstance
     * @return Corto_ProxyServer
     */
    public function setBindingsModule(Corto_Module_Bindings $bindingsInstance)
    {
        return $this->_setModule(self::MODULE_BINDINGS, $bindingsInstance);
    }

    /**
     * @return Corto_Module_Services
     */
    public function getServicesModule()
    {
        return $this->_getModule(self::MODULE_SERVICES);
    }

    /**
     * @param Corto_Module_Services $servicesInstance
     * @return Corto_ProxyServer
     */
    public function setServicesModule(Corto_Module_Services $servicesInstance)
    {
        return $this->_setModule(self::MODULE_SERVICES, $servicesInstance);
    }

    /**
     * @param string $name
     * @return Corto_Module_Abstract
     */
    protected function _getModule($name)
    {
        return $this->_modules[$name];
    }

    /**
     * @param  $name
     * @param  $moduleInstance
     * @return Corto_ProxyServer
     */
    protected function _setModule($name, Corto_Module_Abstract $moduleInstance)
    {
        $this->_modules[$name] = $moduleInstance;
        return $this;
    }

    public function getCurrentMD($f1, $f2 = null, $f3 = null, $default = null)
    {
        return $this->_getMD($this->_metadata['current'], $f1, $f2, $f3, $default);
    }

    public function getRemoteMD($id, $f1, $f2 = null, $f3 = null, $default = null)
    {
        return $this->_getMD($this->_metadata['md'][$id], $f1, $f2, $f3, $default);
    }

    private function _getMD($md, $f1, $f2, $f3, $default = null)
    {
        if ($f3) {
            $res = nvl3($md, $f1, $f2, $f3);
        } elseif ($f2) {
            $res = nvl2($md, $f1, $f2);
        } else {
            $res = nvl($md, $f1);
        }
        if (!$res) {
            if ($default !== null) {
                return $default;
            } else {
                throw new Corto_ProxyServer_Exception("Needed metadata not found: $f1/$f2/$f3 for entity: " . $md['entityID']);
            }
        }
        return $res;

    }

    public function getPublicMetadata($entityID)
    {
        $publicmetadata = require $this->_metadatapath . $this->_cortoinstance . '.public.metadata.php';
        $publicmetadata = $this->rehost($publicmetadata, $this->_hosted, $this->_cohosted);
        return nvl($publicmetadata, $entityID);
    }

    public function selfUrl($entityid = null)
    {
        return 'http' . (nvl($_SERVER, 'HTTPS') ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . $this->selfPath($entityid);
    }

    public function selfPath($entityid = null)
    {
        return $_SERVER['SCRIPT_NAME'] . ($entityid ? '/' . $entityid : '');
    }

    public function selfDestination()
    {
        return self::selfUrl() . $_SERVER['PATH_INFO'];
    }

    public function getRemoteEntity($entityId)
    {
        return nvl($this->_metadata['md'], $entityId);
    }

    public function getRemoteEntities()
    {
        return array_intersect($this->_metadata['md'], array($this->_metadata['current']));
    }

    public function getPresetIDPs()
    {
        return nvl3($this->_metadata, 'current', 'IDP', 'corto:IDPList', array());
    }

    public function getAllowedIDPs($sso = false)
    {
        $res = array();

        $metadata = $this->_metadata['md'];

        foreach ($metadata as $id => $entity) {
            if (isset($entity['IDP']['SingleSignOnService'])) {
                if ($entity['entityID'] == nvl2($this->_metadata, 'current', 'entityID')) continue;
                $res[] = $entity['entityID'];
            }
        }
        if ($allowedIDPs = nvl3($this->_metadata, 'current', 'SP', 'corto:allowedIDPs')) {
            $res = array_intersect($res, $allowedIDPs);
        }
        if ($deniedIDPs = nvl3($this->_metadata, 'current', 'SP', 'corto:deniedIDPs')) {
            $res = array_diff($res, $deniedIDPs);
        }

        if ($sso) {
            foreach ($res as $entityid) {
                $ssoservices[] = $metadata[$entityid]['IDP']['SingleSignOnService'][0]['Location'];
            }
            return $ssoservices;
        }
        return $res;
    }


    public function setMetadata($metadatapath, $cortoinstance, $rehost = false)
    {
        /**
         * This is to allow the default metadata to be independent of the location of corto
         * Replaces _HOSTED_ with the actual location
         */
        $this->_cortoinstance = $cortoinstance;
        $this->_metadatapath = $metadatapath;
        $this->_hosted = $hosted = 'http' . (nvl($_SERVER, 'HTTPS') ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'];
        $this->_cohosted = $cohosted = join("/", array_slice(explode("/", $hosted), 0, -1));
        $this->_metadata = require $metadatapath . $cortoinstance . '.optimized.metadata.php';
        if ($rehost) {
            $this->_metadata = $this->rehost($this->_metadata, $hosted, $cohosted);
        }
        $this->_metadata['lookuptable'][$hosted . "/_VVPMCIP_"] = array(
            'Service' => '_VVPMCIP_',
        );
    }

    public function setTemplatePath($path)
    {
        $this->_templatePath = $path;
        return $this;
    }

    private function rehost($md, $host, $cohost)
    {
        foreach ($md as $k => $v) {
            $k = str_replace('_HOSTED_', $host, $k);
            $k = str_replace('_COHOSTED_', $cohost, $k);
            if (is_array($v)) {
                $hosted[$k] = self::rehost($v, $host, $cohost);
            } else {
                $v = str_replace('_HOSTED_', $host, $v);
                $v = str_replace('_COHOSTED_', $cohost, $v);
                $hosted[$k] = $v;
            }
        }
        return $hosted;
    }

    //////// MAIN /////////
    /**
     * Main method for handling all requests to the ProxyServer
     *
     * @param  $uri
     * @return void
     */
    public function serveRequest($uri = null)
    {
        /*
           * non null $uri is used for the INTERNAL binding
           */
        if (!$uri) {
            $uri = 'http' . (nvl($_SERVER, 'HTTPS') ? 's' : '') . '://' . $_SERVER['HTTP_HOST']
                    . $_SERVER['PHP_SELF'];
        }
        $parameters = $this->getParametersFromUrl($uri);
        $this->setCurrentEntity($parameters['EntityID']);

        $this->startSession();
        $this->getSessionLog()->debug("Started request with $uri, resulting in parameters: " . var_export($parameters, true));
        $serviceName = $parameters['Service'];
        $this->getSessionLog()->debug("Calling service '$serviceName'");
        $this->getServicesModule()->$serviceName($parameters);
        $this->getSessionLog()->debug("Done calling service '$serviceName'");
    }

    /**
     * Search through the federations and lookup the parameters for the targeted entity
     *
     * @param  $uri the full service uri
     * @return array with EntityID, Service and Binding
     */
    public function getParametersFromUrl($uri)
    {
        #print_r($this->_metadata);
        $remote = nvl($this->_metadata['lookuptable'], $uri);

        if (!isset($remote)) {
            throw new Corto_ProxyServer_Exception("No entity found for url: $uri");
        }

        if (is_array($remote) && $remote['Service'] == '_VVPMCIP_') {
            $remote['EntityID'] = $_POST['cortoentityid'];
            $remote['Service'] = $_POST['cortoservice'];
        } elseif (is_array($remote)) {
        } else {
            $remote = array(
                'EntityID' => $uri,
                'Service' => 'metadataservice',
                #'Binding' => 'URI' - not used - always URI don't bother using bindings
            );
        }
        return $remote;
    }

    /**
     * Set the current metadata
     * remote is the known remote entities
     * current is the metadata for the current entity
     *
     * @param  $entityID
     * @param  $federation if null stay in the current federation
     */
    public function setCurrentEntity($entityID)
    {
        $this->_metadata['current'] = $this->_metadata['md'][$entityID];
    }

    ////////  REQUEST HANDLING /////////

    /**
     * Send a (proxied) authenticationrequest, optionally use the corto:ProxySP as the
     * issuer. Store both the original request and the new in the session. Let the new
     * point to the old
     *
     * @param  $request
     * @param  $idp
     * @param  $scope
     * @return void
     */
    public function sendAuthenticationRequest(array $request, $idp, $scope = null)
    {
        $originalId = $request['_ID'];

        $proxySP = $this->_server->getCurrentMD('IDP', 'corto:proxySP', 0, false);

        if (!$proxySP) {
            $issuer = $request['saml:Issuer']['__v'];
            $proxySP = $this->_server->getRemoteMD($issuer, 'SP', 'corto:proxySP', 0, false);
        }

        if ($proxySP) {
            $request['__']['ProxyIDP'] = $this->_server->getCurrentMD('entityID');
            $this->_metadata['current'] = $this->_metadata['md'][$proxySP[0]];
            $this->startSession();
        }

        $newRequest = $this->createEnhancedRequest($request, $idp, $scope);

        $newId = $newRequest['_ID'];

        // Store the original Request
        $_SESSION[$originalId]['SAMLRequest'] = $request;

        // Store the mapping from the new request ID to the original request ID
        $_SESSION[$newId] = array();
        #$_SESSION[$newId]['SAMLRequest'] = $request;
        $_SESSION[$newId]['_InResponseTo'] = $originalId;

        $this->getBindingsModule()->send($newRequest, $idp);
    }

    /**
     *
     *
     * @param string $idp
     * @param array|null $scoping
     * @return array
     */
    public function createEnhancedRequest($originalRequest, $idp, array $scoping = null)
    {
        $remoteMetaData = $this->_metadata['md'][$idp];
        $ourMetaData = $this->_metadata['current'];
        $defaultacs = $ourMetaData['SP']['AssertionConsumerService']['default'];

        $request = array(
            Corto_XmlToArray::TAG_NAME_KEY => 'samlp:AuthnRequest',
            '__' => array(
                'paramname' => 'SAMLRequest',
                'destinationid' => $idp,
                'ProtocolBinding' => $remoteMetaData['IDP']['SingleSignOnService'][0]['Binding'],
            ),
            '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
            '_xmlns:samlp' => 'urn:oasis:names:tc:SAML:2.0:protocol',

            '_ID' => $this->getNewId(),
            '_Version' => '2.0',
            '_IssueInstant' => $this->timeStamp(),
            '_Destination' => $remoteMetaData['IDP']['SingleSignOnService'][0]['Location'],
            '_ForceAuthn' => ($originalRequest['_ForceAuthn']) ? 'true' : 'false',
            '_IsPassive' => ($originalRequest['_IsPassive']) ? 'true' : 'false',

            // Send the response to us. We always use ACSURL as per sam2int.org
            '_AssertionConsumerServiceURL' => $ourMetaData['SP']['AssertionConsumerService'][$defaultacs]['Location'],
            '_ProtocolBinding' => $ourMetaData['SP']['AssertionConsumerService'][$defaultacs]['Binding'],

            '_AttributeConsumingServiceIndex' => nvl($originalRequest, '_AttributeConsumingServiceIndex'),
            'saml:Issuer' => array('__v' => $this->_metadata['current']['entityID']),
            'samlp:NameIDPolicy' => array(
                '_Format' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                '_AllowCreate' => 'true',
            ),
        );

        // Copy original scoping rules
        if (isset($originalRequest['samlp:Scoping'])) {
            $request['samlp:Scoping'] = $originalRequest['samlp:Scoping'];
        } else {
            $request['samlp:Scoping'] = array();
        }

        if ($scoping) {
            foreach ((array) $scoping as $scopedIdP) {
                $request['samlp:Scoping']['samlp:IDPList']['samlp:IDPEntry'][] = array('_ProviderID' => $scopedIdP);
            }
            #return $request;
        }

        // Decrease or initialize the proxycount
        if (isset($originalRequest['samlp:Scoping']['_ProxyCount'])) {
            $request['samlp:Scoping']['_ProxyCount']--;
        }
        else {
            $request['samlp:Scoping']['_ProxyCount'] = $this->getCurrentMD('max_proxies', null, null, 10);
        }

        // Add the issuer of the original request as requester
        if (!isset($request['samlp:Scoping']['samlp:RequesterID'])) {
            $request['samlp:Scoping']['samlp:RequesterID'] = array();
        }
        $request['samlp:Scoping']['samlp:RequesterID'][] = array('__v' => $originalRequest['saml:Issuer']['__v']);

        // Add the idp as requester - if we are sending the req as another entity than the one who received it
        if ($proxyidp = nvl($originalRequest['__'], 'ProxyIDP')) {
            $request['samlp:Scoping']['samlp:RequesterID'][] = array('__v' => $proxyidp);
        }

        return $request;
    }

    /**
     * Single Logout handling
     */

    /**
     *
     * Saves the info needed for later SLO:
     * - Issuer of incoming response or receipient of out going response
     * - Subject
     * - Time when no longer valid @@todo notonorafter - for slo info
     *
     * SLO can be initiated from a back-end request so we need to be able
     * to get to the subjects incoming and outgoing responses using only
     * subject and entityid
     *
     * @param array $message
     */

    public function saveSloInfo(array $message)
    {
        $issuer = $message['saml:Issuer']['__v'];
        $me = $this->getCurrentMD('entityID');
        if ($issuer == $me) { // outgoing response
            $type = 'SP';
            $entity = $message['__']['destinationid'];
        } else { // incoming response
            $type = 'IDP';
            $entity = $issuer;
        }
        if (!nvl2($this->getRemoteEntity($entity), 'SP', 'saveSLOInfo')) {
            return;
        }
        ;
        // @todo support SessionIndex and SubjectConfirmation, EncryptedID
        $id = nvl3($message, 'saml:Assertion', 'saml:Subject', 'saml:NameID');
        if (!$id) {
            throw new Corto_ProxyServer_Exception("No NameID in message (EncryptedID not supported yet!)");
        }
        $sessionnotonorafter = nvl3($message, 'saml:Assertion', 'saml:AuthnStatement', '_SessionNotOnOrAfter');
        $sessionindex = session_id();
        $key = 'ID-' . sha1($me . serialize($id));
        if ($notonorafter = db_del($key, 'notonorafter')) {
            if ($notonorafter > timeStamp()) {
                db_put($key, $notonorafter, 'notonorafter'); // be prepared for yet another one ...
                throw new Corto_ProxyServer_Exception("A very rare, but yet unsupported situation has happened:
                An sssertion was received while an earlier LogoutRequest was still active: notonorafter = $notonorafter");
            }
        }
        db_add($key, $sessionindex, 'session');
        $info = array(
            'entity' => $entity,
            'nameID' => $id,
            'nameIDType' => 'saml:NameID',
            'sessionnotonorafter' => $sessionnotonorafter,
            'session' => $sessionindex,
        );
        db_put($type . '-' . $sessionindex, $info, sha1($entity));
    }

    /**
     * Initialises the SLO information based on an incoming SLO request.
     * Starts the SLO process by calling handleslo with a fake request.
     *
     * @throws Corto_ProxyServer_Exception
     * @param  array $message - a SLO request
     * @return void
     *
     */

    public function sloinit($message)
    {
        $id = nvl($message, 'saml:NameID');
        if (!$id) {
            throw new Corto_ProxyServer_Exception("No NameID in message (EncryptedID not supported yet!)");
        }
        $key = 'ID-' . sha1($this->getCurrentMD('entityID') . serialize($id));
        if ($notonorafter = nvl($message, '_NotOnOrAfter')) {
            db_put($key, $notonorafter, 'NotOnOrAfter');
        }
        $sessions = db_del($key, 'session');
        $msgid = $message['_ID'];
        $sloinfo = array(
            'sessions' => $sessions,
            'ID' => $msgid,
            'Issuer' => $message['saml:Issuer']['__v'],
            'Binding' => $message['__']['Binding'],
            'NotOnOrAfter' => $notonorafter,
            'success' => true,
        );
        db_put('SLO-' . $msgid, $sloinfo);
        $fakemsgid = ID();
        db_put('REQ-' . $fakemsgid, array('ID' => $msgid));
        return $this->handleslo(array('_InResponseTo' => $fakemsgid));
    }

    /**
     * Handles the reception of SLO responses and sending of new SLO requests.
     * Deletes information for handled SLO request and finally deletes the session
     * the original SLO request was sent to.
     *
     * @param  array $message
     * @return void
     *
     *
     */
    public function handleslo(array $message)
    {
        $me = $this->getCurrentMD('entityID');
        $inresponseto = $message['_InResponseTo'];
        $req = db_get('REQ-' . $inresponseto);
        if ($remote = nvl($req, 'entity')) {
            db_del($req['type'] . '-' . $req['sessionindex'], sha1($remote));
        }

        $sloinfo = db_get('SLO-' . $req['ID']);
        $success = 'urn:oasis:names:tc:SAML:2.0:status:Success';
        if ($status = nvl2($message, 'samlp:Status', 'samlp:StatusCode')) {
            if ($status['_Value'] != $success || nvl2($status, 'samlp:StatusCode', '_Value')) {
                $sloinfo['success'] = false;
                db_put('SLO-' . $req['request '], $sloinfo);
            }
        }
        foreach ((array) nvl($sloinfo, 'sessions') as $session => $dummy) {
            foreach (array('IDP', 'SP') as $type) {
                $responses = db_get($type . '-' . $session, '*');
                foreach ($responses as $hashedentity => $info) {
                    if ($info['entity'] == $sloinfo['Issuer']) {
                        db_del($type . '-' . $session, $hashedentity);
                        continue;
                    }
                    $id = ID();
                    $info['ID'] = $id;
                    $info['type'] = $type;
                    debug("REQ id+", $id);
                    db_put("REQ-$id", serialize($info));
                    $response = $this->sendLogoutRequest($info);
                    if (!$response) {
                        $res = false;
                    } else {
                        $status = $response['samlp:Status']['samlp:StatusCode'];
                        $res = $status['_Value'] != $success || nvl2($status, 'samlp:StatusCode', '_Value');
                    }
                    if (!$res && $sloinfo['success']) {
                        $sloinfo['success'] = false;
                        db_put('SLO-' . $req['ID'], serialize($sloinfo));
                    }
                }
                ;
                db_del('REQ-' . $inresponseto);
            }
            delete_corto_session($session);
        }
        db_del('SLO-' . $req['ID']);
        $this->sendLogoutResponse($sloinfo);
    }


    /**
     * Sends a SLO request base on the info in the slorequest info - returns if the binding
     * is SOAP.
     *
     * @param  array $slorequestinfo
     * @return bool
     *
     */
    public function sendLogoutRequest($slorequestinfo)
    {
        $type = $slorequestinfo['type'];
        $entity = $slorequestinfo['entity'];
        $sloEndpoints = nvl($this->_metadata['md'][$entity][$type], 'SingleLogoutService');
        if (!$sloEndpoints) {
            return false;
        }

        foreach ($sloEndpoints as $endpoint) {
            $slobybinding[$endpoint['Binding']][] = $endpoint;
        }

        $bindings = array('SOAP', 'HTTP-Redirect', 'HTTP-POST', 'HTTP-Artifact');
        foreach ($bindings as $binding) {
            if ($endpoints = nvl($slobybinding, 'urn:oasis:names:tc:SAML:2.0:bindings:' . $binding)) {
                break;
            }
        }
        $endpoint = $endpoints[0];

        $request = array(
            '__t' => 'samlp:LogoutRequest',
            '__' => array(
                'destinationid' => $entity,
                'ProtocolBinding' => $endpoint['Binding'],
                'paramname' => 'SAMLRequest',
            ),
            '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
            '_xmlns:samlp' => 'urn:oasis:names:tc:SAML:2.0:protocol',

            '_ID' => $slorequestinfo['ID'],
            '_Version' => '2.0',
            '_IssueInstant' => $this->timeStamp(),
            '_Destination' => $endpoint['Location'],
            '_NotOnOrAfter' => timeStamp(5),
            'saml:Issuer' => array('__v' => $this->_metadata['current']['entityID']),
        );

        $request[$slorequestinfo['nameIDType']] = $slorequestinfo['nameID'];
        // only actually returns if soap call ...
        $soapresponse = $this->getBindingsModule()->send($request, $entity);
    }

    /**
     * Send a logoutresponse to the issuer of the original request
     *
     * @param  $request - the original request
     * @param  $partial - true if not all slo request sent from this entity was successful
     * @return void
     */
    public function sendLogoutResponse($sloinfo)
    {
        $remote = $this->_metadata['md'][$sloinfo['Issuer']];
        if ($sloinfo['Binding'] == 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP') {
            $endpoint['Binding'] = $sloinfo['Binding'];
        } else {
            foreach (array('SP', 'IDP') as $type) {
                $sloEndpoints = $remote[$type]['SingleLogoutService'];
                foreach ($sloEndpoints as $endpoint) {
                    $binding = $endpoint['Binding'] == $sloinfo['Binding'];
                    if ($binding) {
                        break 2;
                    }
                }
            }
            if (!$binding) {
                $endpoint = reset($sloEndpoints);
            }
        }

        $response = array(
            '__t' => 'samlp:LogoutResponse',
            '__' => array(
                'destinationid' => $sloinfo['Issuer'],
                'ProtocolBinding' => $endpoint['Binding'],
                'paramname' => 'SAMLResponse',
            ),
            '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
            '_xmlns:samlp' => 'urn:oasis:names:tc:SAML:2.0:protocol',

            '_ID' => $this->getNewId(),
            '_Version' => '2.0',
            '_IssueInstant' => $this->timeStamp(),
            '_Destination' => nvl($endpoint, 'Location'),
            '_InResponseTo' => $sloinfo['ID'],
            'samlp:Status' => array(
                'samlp:StatusCode' => array(
                    '_Value' => 'urn:oasis:names:tc:SAML:2.0:status:Success',
                ),
            ),
        );
        if (!$sloinfo['success']) {
            $response['samlp:Status']['samlp:StatusCode']['samlp:StatusCode'] = array(
                '_Value' => 'urn:oasis:names:tc:SAML:2.0:status:PartialLogout',
            );
        }
        return $this->getBindingsModule()->respond($response, $remote);
    }


    //////// RESPONSE HANDLING ////////

    public function createErrorResponse($request, $errorStatus)
    {
        $response = $this->_createBaseResponse($request);

        $errorCodePrefix = 'urn:oasis:names:tc:SAML:2.0:status:';
        $response['samlp:Status'] = array(
            'samlp:StatusCode' => array(
                '_Value' => 'urn:oasis:names:tc:SAML:2.0:status:Responder',
                'samlp:StatusCode' => array(
                    '_Value' => $errorCodePrefix . $errorStatus,
                ),
            ),
        );
        return $response;
    }

    public function createEnhancedResponse($request, $sourceResponse, $proxySP = null)
    {
        $response = $this->_createBaseResponse($request);
        $response['samlp:Status'] = $sourceResponse['samlp:Status'];
        if (nvl($response['samlp:Status']['samlp:StatusCode'], '_Value') != 'urn:oasis:names:tc:SAML:2.0:status:Success') {
            return $response;
        }
        $response['saml:Assertion'] = $sourceResponse['saml:Assertion'];
        unset($response['saml:Assertion']['ds:Signature']);

        // remove us from the list otherwise we will as a proxy be there multiple times
        // as the assertion passes through multiple times ???
        $authenticatingAuthorities = &$response['saml:Assertion']['saml:AuthnStatement']['saml:AuthnContext']['saml:AuthenticatingAuthority'];
        foreach ((array) $authenticatingAuthorities as $key => $authenticatingAuthority) {
            if ($authenticatingAuthority['__v'] === $this->getCurrentMD('entityID')) {
                unset($authenticatingAuthorities[$key]);
            }
        }
        if ($this->getCurrentMD('entityID') !== $sourceResponse['saml:Issuer']['__v']) {
            $authenticatingAuthorities[] = array('__v' => $sourceResponse['saml:Issuer']['__v']);
        }

        if ($proxySP) {
            $authenticatingAuthorities[] = array('__v' => $proxySP);
        }

        $subjectConfirmation = &$response['saml:Assertion']['saml:Subject']['saml:SubjectConfirmation']['saml:SubjectConfirmationData'];
        $subjectConfirmation['_Recipient'] = $response['_Destination'];
        $subjectConfirmation['_InResponseTo'] = $request['_ID'];

        $response['saml:Assertion']['saml:Issuer'] = array('__v' => $response['saml:Issuer']['__v']);
        $response['saml:Assertion']['saml:Conditions']['saml:AudienceRestriction']['saml:Audience']['__v'] = $request['saml:Issuer']['__v'];

        return $response;
    }

    public function createNewResponse($request, $attributes = array())
    {
        $response = $this->_createBaseResponse($request);

        $soon = $this->timeStamp($this->getCurrentMD('NotOnOrAfter', null, null, 300));
        $sessionEnd = $this->timeStamp($this->getCurrentMD('SessionEnd', null, null, 60 * 60 * 12));

        $response['saml:Assertion'] = array(
            '_xmlns:xsi' => 'http://www.w3.org/2001/XMLSchema-instance',
            '_xmlns:xs' => 'http://www.w3.org/2001/XMLSchema',
            '_xmlns:samlp' => 'urn:oasis:names:tc:SAML:2.0:protocol',
            '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',

            '_ID' => $this->getNewId(),
            '_Version' => '2.0',
            '_IssueInstant' => $response['_IssueInstant'],

            'saml:Issuer' => array('__v' => $response['saml:Issuer']['__v']),
            'saml:Subject' => array(
                'saml:NameID' => array(
                    '_SPNameQualifier' => $this->getCurrentMD('entityID'),
                    '_Format' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                    '__v' => $this->getNewId(),
                ),
                'saml:SubjectConfirmation' => array(
                    '_Method' => 'urn:oasis:names:tc:SAML:2.0:cm:bearer',
                    'saml:SubjectConfirmationData' => array(
                        '_NotOnOrAfter' => $soon,
                        # @todo is this the right Recipient?
                        '_Recipient' => $response['_Destination'], # req issuer
                        '_InResponseTo' => $request['_ID'],
                    ),
                ),
            ),
            'saml:Conditions' => array(
                '_NotBefore' => $response['_IssueInstant'],
                '_NotOnOrAfter' => $soon,
                'saml:AudienceRestriction' => array(
                    'saml:Audience' => array('__v' => $request['saml:Issuer']['__v']),
                ),
            ),
            'saml:AuthnStatement' => array(
                '_AuthnInstant' => $response['_IssueInstant'],
                '_SessionNotOnOrAfter' => $sessionEnd,
                'saml:SubjectLocality' => array(
                    '_Address' => $_SERVER['REMOTE_ADDR'],
                    '_DNSName' => $_SERVER['REMOTE_HOST'],
                ),
                'saml:AuthnContext' => array(
                    'saml:AuthnContextClassRef' => array('__v' => 'urn:oasis:names:tc:SAML:2.0:ac:classes:Password'),
                ),
            ),
        );

        if (!isset($attributes['binding'])) {
            $attributes['binding'] = array();
        }
        $attributes['binding'][] = $response['__']['ProtocolBinding'];
        foreach ((array) $attributes as $key => $vs) {
            foreach ($vs as $v) {
                $attributeStatement[$key][] = $v;
            }
        }

        $attributeConsumingServiceIndex = $request['_AttributeConsumingServiceIndex'];
        if ($attributeConsumingServiceIndex) {
            $attributeStatement['AttributeConsumingServiceIndex'] = "AttributeConsumingServiceIndex: $attributeConsumingServiceIndex";
        }
        else {
            $attributeStatement['AttributeConsumingServiceIndex'] = '-no AttributeConsumingServiceIndex given-';
        }

        $response['saml:Assertion']['saml:AttributeStatement'][0]['saml:Attribute'] = Corto_XmlToArray::array2attributes($attributeStatement);

        return $response;
    }

    protected function _createBaseResponse($request)
    {
        $now = $this->timeStamp();
        $response = array(
            Corto_XmlToArray::TAG_NAME_KEY => 'samlp:Response',
            '__' => array(
                'paramname' => 'SAMLResponse',
                'RelayState' => nvl($request['__'], 'RelayState')
            ),
            '_xmlns:samlp' => 'urn:oasis:names:tc:SAML:2.0:protocol',
            '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',

            '_ID' => $this->getNewId(),
            '_Version' => '2.0',
            '_IssueInstant' => $now,
            '_InResponseTo' => $request['_ID'],

            'saml:Issuer' => array('__v' => $this->_metadata['current']['entityID']),
            'samlp:Status' => array(
                'samlp:StatusCode' => array(
                    '_Value' => 'urn:oasis:names:tc:SAML:2.0:status:Success',
                ),
            ),
        );

        $destinationID = $request['saml:Issuer']['__v'];
        $response['__']['destinationid'] = $destinationID;
        $remoteEntity = $this->getRemoteEntity($destinationID);

        if ($acsUrl = nvl($request, '_AssertionConsumerServiceURL')) {
            // @todo check that the request is signed before accepting acsURLs
            // saml2int check that it is present in metadata may do for now ...
            // but we have to have a sam2int config flag to enable this in the future
            foreach ((array) $remoteEntity['SP']['AssertionConsumerService'] as $acs) {
                if ($acs['Location'] == $acsUrl) {
                    $response['_Destination'] = $acsUrl;
                    $response['__']['ProtocolBinding'] = $request['_ProtocolBinding'];
                    break;
                }
            }
        } elseif ($acsindex = nvl($request, '_AssertionConsumerServiceIndex')
                && isset($remoteEntity['SP']['AssertionConsumerService'][$acsindex])) {
            $acs = $remoteEntity['SP']['AssertionConsumerService'][$acsindex];
            $response['_Destination'] = $acs['Location'];
            $response['__']['ProtocolBinding'] = $acs['Binding'];
            //@todo return error when indexed acs is not found - not the default!
        } else {
            $acsindex = $remoteEntity['SP']['AssertionConsumerService']['default'];
            $acs = $remoteEntity['SP']['AssertionConsumerService'][$acsindex];
            $response['_Destination'] = $acs['Location'];
            $response['__']['ProtocolBinding'] = $acs['Binding'];
        }

        if (!nvl($response, '_Destination')) {
            throw new Corto_ProxyServer_Exception("No (allowed) Destination in request or metadata for: $destinationID");
        }

        return $response;
    }


    function sendResponseToRequestIssuer($request, $response)
    {

        $requestIssuer = $request['saml:Issuer']['__v'];
        unset($_SESSION[$request['_ID']]);

        if ($response['samlp:Status']['samlp:StatusCode']['_Value'] == 'urn:oasis:names:tc:SAML:2.0:status:Success') {
            $this->saveSloInfo($response);
            return $this->getBindingsModule()->send($response, $requestIssuer);
        }
        else {
            unset($response['saml:Assertion']);
            return $this->getBindingsModule()->send($response, $requestIssuer);
        }
    }

    public function getReceivedRequestFromResponse($id)
    {
        if (!$id || !isset($_SESSION[$id])) {
            throw new Corto_ProxyServer_Exception("Unknown id ($id) in InResponseTo attribute?!?");
        }

        // Get the ID of the original request (from the SP)
        if (!isset($_SESSION[$id]['_InResponseTo'])) {
            echo "<pre>";
            print_r($_SESSION);
            echo "</pre>";
            throw new Corto_ProxyServer_Exception("ID `$id` does not have a _InResponseTo?!?");
        }
        $originalRequestId = $_SESSION[$id]['_InResponseTo'];
        unset($_SESSION[$id]);

        if (!isset($_SESSION[$originalRequestId]['SAMLRequest'])) {
            throw new Corto_ProxyServer_Exception('Response has no known Request');
        }
        return $_SESSION[$originalRequestId]['SAMLRequest'];
    }

    ////////  TEMPLATE RENDERING /////////

    public function renderTemplate($templateName, $vars = array(), $parentTemplates = array())
    {
        if (!is_array($vars)) {
            $vars = array('content' => $vars);
        }

        $templateFileName = $this->_templatePath . $templateName . '.phtml';

        ob_start();
        extract($vars);

        include($templateFileName);

        $content = ob_get_contents();
        ob_end_clean();

        foreach ($parentTemplates as $parentTemplate) {
            $content = $this->renderTemplate(
                $parentTemplate,
                array(
                    'content' => $content,
                )
            );
        }
        return $content;
    }

    /// Filters ///

    public function callfilters($phase, &$state = null, &$filters = null, &$data = null, $service = null)
    {
        $cortopassthru = nvl($_POST, 'cortopassthru') . nvl($_GET, 'cortopassthru');
        if ($phase == 'init') {
            if ($cortopassthru) {
                return false;
            }
            return true;
        }
        /*
        * Backend need to have 'cortopassthru' in POST / GET - can be used as backend session id as well
        * Corto data is always sent to backend - is in corto session anyway - no need to save in
        * backend session as well!
        */
        $cortofirstcall = false;

        /*
        * First time thru - set up session
        * Need unique id as a user can have more than one filter active at any one time
        */
        #$dbt = debug_backtrace();
        #$fileline = sha1($dbt[1]['file'] . $dbt[1]['line']);

        if (empty($cortopassthru)) {
            $cortopassthru = ID();
        }
        if (empty($_SESSION['corto_filter'][$cortopassthru])) {
            $_SESSION['corto_filter'][$cortopassthru]['i'] = 0;
            $_SESSION['corto_filter'][$cortopassthru]['state'] = $state;
            $_SESSION['corto_filter'][$cortopassthru]['data'] = $data;
            $_SESSION['corto_filter'][$cortopassthru]['phase'] = $phase;
            $_SESSION['corto_filter'][$cortopassthru]['filters'] = $filters;
            $cortofirstcall = true;
            unset($_POST);
            $_POST = null;
        }

        /*
        * This is
        */
        if ($_SESSION['corto_filter'][$cortopassthru]['phase'] != $phase) {
            return false;
        }
        /*
        * Loop thru all the filters
        * callfilter does NOT return if there is user interaction involved
        * Stop when there are no more filters
        */


        while (true) {
            $filter = nvl($_SESSION['corto_filter'][$cortopassthru]['filters'], $_SESSION['corto_filter'][$cortopassthru]['i']);
            if (!$filter) {
                $state = $_SESSION['corto_filter'][$cortopassthru]['state'];
                #unset($_SESSION['corto_filter'][$cortopassthru]);
                unset($_SESSION['corto_filter']);
                unset($_POST['cortopassthru']);
                unset($_GET['cortopassthru']);
                return true;
            }
            $data = $_SESSION['corto_filter'][$cortopassthru]['data'];
            $res = $this->callfilter($phase, $filter, $data, $cortopassthru, $cortofirstcall, $service);
            if ($res) $data = $res;
            $_SESSION['corto_filter'][$cortopassthru]['i']++;
            $_SESSION['corto_filter'][$cortopassthru]['data'] = $data;
            $cortofirstcall = true;
            #unset($_POST);
        }
    }

    private function callfilter($phase, $filter, $data, $cortopassthru, $cortofirstcall, $service)
    {
        $_POST['cortophase'] = $phase;
        $_POST['cortodata'] = $data;
        $_POST['cortocookiepath'] = "";
        $_POST['cortopassthru'] = $cortopassthru;
        $_POST['cortofirstcall'] = $cortofirstcall;
        $_POST['cortoentityid'] = $this->getCurrentMD('entityID');
        $_POST['cortoservice'] = $service;
        if ($service) {
            $_POST['cortolocation'] = 'http' . (nvl($_SERVER, 'HTTPS') ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'] . '/_VVPMCIP_';

        } else {
            $_POST['cortolocation'] = 'http' . (nvl($_SERVER, 'HTTPS') ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        }


        if ($thefilter = nvl($filter, 'type') == 'url') {
            $_POST['cortotoken'] = $filter['token'];
            $_POST['cortoreturn'] = 'json';

            $content = http_build_query($_POST);
            $headers = array('Host', 'User_Agent', 'Accept', 'Accept_Language', 'Accept_Encoding',
                             'Accept_Charset', 'Cookie');
            foreach ($headers as $h) {
                $k = str_replace('_', '-', ucfirst($h));
                $header .= "$k: " . $_SERVER['HTTP_' . strtoupper($h)] . "\r\n";
            }
            $header .= "Content-type: application/x-www-form-urlencoded\r\n";
            $header .= 'Content-length: ' . strlen($content) . "\r\n";
            $context = stream_context_create(array(
                'http' => array(
                    'method' => 'POST',
                    'header' => $header,
                    'content' => $content,
                    'timeout' => 5,
                ),
            ));
            $ret = file_get_contents($thefilter, false, $context);
            if (in_array('X-Corto-Return: true', $http_response_header)) {
                return json_decode($ret, 1);
            } else {
                foreach ($http_response_header as $header) {
                    header($header);
                }
                print $ret;
                print_r($http_response_header);
                exit;
            }
        } else {
            $_POST['cortoreturn'] = 'array';
            return call_user_func($filter, $_POST);
        }
    }

    //////// I/O /////////

    /**
     * Parse the HTTP URL query string and return the (raw) parameters in an array.
     *
     * We need to do this ourselves, so that we get access to the raw (url encoded) values.
     * This is required because different software can url encode to different values.
     *
     * @return array Raw parameters form the query string
     */
    public function getRawGet()
    {
        $rawGet = array();
        foreach (explode("&", $_SERVER['QUERY_STRING']) as $parameter) {
            if (preg_match("/^(.+)=(.*)$/", $parameter, $keyAndValue)) {
                $rawGet[$keyAndValue[1]] = $keyAndValue[2];
            }
        }
        return $rawGet;
    }

    public function redirect($location, $message)
    {
        $this->getSessionLog()->debug("Redirecting to $location");

        if ($this->getCurrentMD('debug', null, null, false)) {
            $output = $this->renderTemplate('redirect', array('location' => $location, 'message' => $message));
            $this->sendOutput($output);
        } else {
            $this->sendHeader('Location', $location);
        }
        exit;
    }

    public function sendHeader($name, $value)
    {
        return header("$name: $value");
    }

    public function sendOutput($rawOutput)
    {
        return print $rawOutput;
    }

    //////// UTILITIES /////////


    /**
     * Generate a SAML datetime with a given delta in seconds.
     *
     * Delta 0 gives current date and time, delta 3600 is +1 hour, delta -3600 is -1 hour.
     *
     * @param int $deltaSeconds
     * @return string
     */
    public function timeStamp($deltaSeconds = 0)
    {
        return gmdate('Y-m-d\TH:i:s\Z', time() + $deltaSeconds);
    }

    public function getNewId()
    {
        return ID();
    }

    /**
     * Initialize corto session - to be able to handle multiple federations
     * and entities the session name is a hash of entityID concatenated with the federation name
     *
     * @return void
     */
    public function startSession()
    {
        $cookie_path = $_SERVER['SCRIPT_NAME'];
        $secure_cookie = nvl($_SERVER, 'HTTPS');
        // IIS returns 'off' if not https
        $secure_cookie = isset($secure_cookie) && $secure_cookie != 'off';
        session_write_close();
        // @todo remember general alert for non-https requests ...
        // @todo what about INTERNAL bindings ???
        session_set_cookie_params ( 0 /* lifetime 0 = session */ , $cookie_path /* path */ , null /* domain */, $secure_cookie /* secure */, true /* httponly */);
        session_name(sha1($this->_metadata['current']['entityID']));
        session_start();
        #$_SESSION['__entity__'] = $this->_metadata['current']['entityID'];
    }

    protected function restartSession($newId, $newName)
    {
        session_write_close();

        session_id($newId);
        session_name($newName);
        session_start();
    }

    /**
     * @return Corto_Log_Interface
     */
    public
    function getSystemLog()
    {
        return $this->_systemLog;
    }

    public function getSessionLog()
    {
        return $this->_systemLog;
    }

    public function setSystemLog(Corto_Log_Interface $log)
    {
        $this->_systemLog = $log;
    }

}
