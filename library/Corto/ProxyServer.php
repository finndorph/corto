<?php

/**
 *
 */
require 'XmlToArray.php';
require 'Log/Dummy.php';

class Corto_ProxyServer_Exception extends Exception {
}

class Corto_ProxyServer {
    const MODULE_BINDINGS = 'Bindings';
    const MODULE_SERVICES = 'Services';

    const TEMPLATE_SOURCE_FILESYSTEM = 'filesystem';
    const TEMPLATE_SOURCE_MEMORY = 'memory';

    const MESSAGE_TYPE_REQUEST = 'SAMLRequest';
    const MESSAGE_TYPE_RESPONSE = 'SAMLResponse';

    protected $_responseArray;

    protected $_server;
    protected $_systemLog;
    protected $_sessionLog;
    protected $_sessionLogDefault;

    protected $_hostedPath = "/";

    protected $_configs;
    protected $_metadata = array(
        'current' => array(),
        'remote' => array(),
        'federations' => array(),
    );

    protected $_url2meta = array();
    protected $_attributes = array();
    protected $_modules = array();
    protected $_templateSource;

    public function __construct() {
        $this->_server = $this;
    }

//////// GETTERS / SETTERS /////////

    /**
     * @return Corto_Module_Bindings
     */
    public function getBindingsModule() {
        return $this->_getModule(self::MODULE_BINDINGS);
    }

    /**
     * @param Corto_Module_Bindings $bindingsInstance
     * @return Corto_ProxyServer
     */
    public function setBindingsModule(Corto_Module_Bindings $bindingsInstance) {
        return $this->_setModule(self::MODULE_BINDINGS, $bindingsInstance);
    }

    /**
     * @return Corto_Module_Services
     */
    public function getServicesModule() {
        return $this->_getModule(self::MODULE_SERVICES);
    }

    /**
     * @param Corto_Module_Services $servicesInstance
     * @return Corto_ProxyServer
     */
    public function setServicesModule(Corto_Module_Services $servicesInstance) {
        return $this->_setModule(self::MODULE_SERVICES, $servicesInstance);
    }

    /**
     * @param string $name
     * @return Corto_Module_Abstract
     */
    protected function _getModule($name) {
        return $this->_modules[$name];
    }

    /**
     * @param  $name
     * @param  $moduleInstance
     * @return Corto_ProxyServer
     */
    protected function _setModule($name, Corto_Module_Abstract $moduleInstance) {
        $this->_modules[$name] = $moduleInstance;
        return $this;
    }

    public function getConfig($name, $default = null) {
        if (isset($this->_configs[$name])) {
            return $this->_configs[$name];
        }
        return $default;
    }

    public function getConfigs() {
        return $this->_configs;
    }

    public function setConfigs($configs) {
        $this->_configs = $configs;
        return $this;
    }

    public function setAttributeMetadata(array $attributes) {
        $this->_attributes = $attributes;
        return $this;
    }

    public function getAttributeName($uid, $ietfLanguageTag = 'en_US') {
        $name = $this->_getAttributeDataType('Name', $uid, $ietfLanguageTag);
        if (!$name) {
            $name = $uid;
        }
        return $name;
    }

    public function getAttributeDescription($uid, $ietfLanguageTag = 'en_US') {
        $description = $this->_getAttributeDataType('Description', $uid, $ietfLanguageTag);
        if (!$description) {
            $description = '';
        }
        return $description;
    }

    protected function _getAttributeDataType($type, $name, $ietfLanguageTag = 'en_US') {
        if (isset($this->_attributes[$name][$type][$ietfLanguageTag])) {
            return $this->_attributes[$name][$type][$ietfLanguageTag];
        }
        // @todo warn the system! requested a unkown UID or langauge...
        return $name;
    }

    public function getCurrentEntity() {
        return $this->_metadata['current'];
    }

    public function getCurrentEntityUrl($serviceName = "", $remoteEntityId = "") {
        return $this->getHostedEntityUrl(nvl($this->_metadata['current'], 'EntityCode'), $serviceName, $remoteEntityId);
    }

    public function getCurrentEntitySetting($name, $default = null) {
        if (isset($this->_metadata['current'][$name])) {
            return $this->_metadata['current'][$name];
        }

        return $default;
    }

    public function selfUrl($entityid = null) {
        return 'http' . ($_SERVER['HTTPS'] ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . $this->selfPath($entityid);
    }

    public function selfPath($entityid = null) {
        return $_SERVER['SCRIPT_NAME'] . ($entityid ? '/' . $entityid : '');
    }

    public function selfDestination() {
        return self::selfUrl() . $_SERVER['PATH_INFO'];
    }

    public function getHostedEntityUrl($entityCode, $serviceName = "", $remoteEntityId = "") {
        if ($serviceName == 'sPMetadataService' || $serviceName = 'idPMetadataService') $serviceName = "";
        $entityPart = $entityCode;
        if ($remoteEntityId) {
            $entityPart .= '_' . md5($remoteEntityId);
        }
        return 'http' . ($_SERVER['HTTPS'] ? 's' : '') . '://' . $_SERVER['HTTP_HOST']
                . $_SERVER['SCRIPT_NAME'] . '/' . $entityPart . ($serviceName ? '/' : '') . $serviceName;
    }

    public function getRemoteEntity($entityId) {
        return nvl($this->_metadata['remote'], $entityId);
    }


    public function getRemoteEntities() {
        return array_intersect($this->_metadata['remote'], array($this->_metadata['current']));
    }

    public function getPresetIDPs() {
        return $this->_metadata['current']['IDP']['corto:IDPList'];
    }

    public function getAllowedIDPs() {
        $res = array();
        foreach ($this->_metadata['remote'] as $id => $entity) {
            if (isset($entity['IDP']['SingleSignOnService'])) {
                if ($entity['entityID'] == $this->_metadata['current']['entityID']) continue;
                $res[] = $entity['entityID'];
            }
        }
        if (is_array(nvl($this->_metadata['current']['SP'], 'corto:allowedIDPs'))) {
            $res = array_intersect($res, $this->_metadata['current']['SP']['corto:allowedIDPs']);
        } elseif (is_array(nvl($this->_metadata['current']['SP'], 'corto:deniedIDPs'))) {
            $res = array_diff($res, $this->_metadata['current']['SP']['corto:deniedIDPs']);
        }
        return $res;
    }

    public function setUrl2meta($url2meta) {

        $this->_url2meta = $url2meta;
    }

    public function setRemoteEntities($entities) {
        $this->_metadata['federations'] = $entities;
    }

    public function setTemplateSource($type, $arguments) {
        $this->_templateSource = array(
            'type' => $type,
            'arguments' => $arguments,
        );
        return $this;
    }

    public function getTemplateSource() {
        return $this->_templateSource;
    }

//////// MAIN /////////

    public function serveRequest($uri = null) {
        if (!$uri) {
            $uri = 'http' . ($_SERVER['HTTPS'] ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
        }
        $parameters = $this->getParametersFromUrl($uri);
        $this->setCurrentEntity($parameters['EntityID'], $parameters['Federation']);

        $this->startSession();
        $this->getSessionLog()->debug("Started request with $uri, resulting in parameters: " . var_export($parameters, true));

        $serviceName = $parameters['ServiceName'];
        $this->getSessionLog()->debug("Calling service '$serviceName'");
        $this->getServicesModule()->$serviceName($parameters);
        $this->getSessionLog()->debug("Done calling service '$serviceName'");
    }

    public function getParametersFromUrl($uri) {

        foreach ($this->_url2meta as $federation => $url2meta) {
            if ($remote = $this->_url2meta[$federation][$uri]) break;
        }

        $parameters = array(
            'Federation' => $federation,
            'EntityID' => $remote['EntityID'],
            'ServiceName' => $remote['Service'],
            'Binding' => $remote['Binding'],
        );
        return $parameters;
    }

    public function setCurrentEntity($entityID, $federation = null) {
        if ($federation) {
            $this->_metadata['remote'] = $this->_metadata['federations'][$federation];
        }

        $this->_metadata['current'] = $this->_metadata['remote'][$entityID];

        return $this;
    }

////////  REQUEST HANDLING /////////

    public function sendAuthenticationRequest(array $request, $idp, $scope = null) {
        $originalId = $request['_ID'];

        if ($proxySP = nvl($this->_metadata['current']['IDP'], 'corto:ProxySP')) {
            $request['__']['ProxyIDP'] = $this->_metadata['current']['entityID'];
            $this->_metadata['current'] = $this->_metadata['remote'][$proxySP[0]];
            $this->startSession();
        }

        $newRequest = $this->createEnhancedRequest($request, $idp, $scope);
        $newId = $newRequest['_ID'];

        // Store the original Request
        $_SESSION[$originalId]['SAMLRequest'] = $request;

        // Store the mapping from the new request ID to the original request ID
        $_SESSION[$newId] = array();
        $_SESSION[$newId]['SAMLRequest'] = $request;
        $_SESSION[$newId]['_InResponseTo'] = $originalId;

        $this->getBindingsModule()->send($newRequest, $this->_metadata['remote'][$idp]);
    }

    /**
     *
     *
     * @param string $idp
     * @param array|null $scoping
     * @return array
     */
    public function createEnhancedRequest($originalRequest, $idp, array $scoping = null) {
        $remoteMetaData = $this->_metadata['remote'][$idp];
        $ourMetaDAta = $this->_metadata['current'];
        $defaultacs = $ourMetaDAta['SP']['AssertionConsumerService']['default'];
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
            '_AssertionConsumerServiceURL' => $ourMetaDAta['SP']['AssertionConsumerService'][$defaultacs]['Location'],
            '_ProtocolBinding' => $ourMetaDAta['SP']['AssertionConsumerService'][$defaultacs]['Binding'],

            '_AttributeConsumingServiceIndex' => $originalRequest['_AttributeConsumingServiceIndex'],

            'saml:Issuer' => array('__v' => $this->_metadata['current']['entityID']),
            'ds:Signature' => '__placeholder__',
            'samlp:NameIDPolicy' => array(
                '_Format' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                '_AllowCreate' => 'true',
            ),
        );

        if ($scoping) {
            $scoping = (array) $scoping;
            foreach ($scoping as $scopedIdP) {
                $request['samlp:Scoping']['samlp:IDPList']['samlp:IDPEntry'][] = array('_ProviderID' => $scoping);
            }
            return $request;
        }

        // Copy original scoping rules
        if (isset($originalRequest['samlp:Scoping'])) {
            $request['samlp:Scoping'] = $originalRequest['samlp:Scoping'];
        }
        else {
            $request['samlp:Scoping'] = array();
        }

        // Decrease or initialize the proxycount
        if (isset($originalRequest['samlp:Scoping']['_ProxyCount'])) {
            $request['samlp:Scoping']['_ProxyCount']--;
        }
        else {
            $request['samlp:Scoping']['_ProxyCount'] = $this->getConfig('max_proxies', 10);
        }

        // Add the issuer of the original request as requester
        if (!isset($request['samlp:Scoping']['samlp:RequesterID'])) {
            $request['samlp:Scoping']['samlp:RequesterID'] = array();
        }
        $request['samlp:Scoping']['samlp:RequesterID'][] = array('__v' => $originalRequest['saml:Issuer']['__v']);

        return $request;
    }

//////// RESPONSE HANDLING ////////

    public function createErrorResponse($request, $errorStatus) {
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

    public function createEnhancedResponse($request, $sourceResponse) {
        $response = $this->_createBaseResponse($request);
        if (isset($request['__']['Transparent']) &&
                $request['__']['Transparent']) {
            $response['saml:Issuer']['__v'] = $sourceResponse['saml:Issuer']['__v'];
            $response['saml:Assertion']['saml:Issuer']['__v'] = $sourceResponse['saml:Assertion']['saml:Issuer']['__v'];
        }

        $response['samlp:Status'] = $sourceResponse['samlp:Status'];
        $response['saml:Assertion'] = $sourceResponse['saml:Assertion'];

        // remove us from the list otherwise we will as a proxy be there multiple times
        // as the assertion passes through multiple times ???
        $authenticatingAuthorities = &$response['saml:Assertion']['saml:AuthnStatement']['saml:AuthnContext']['saml:AuthenticatingAuthority'];
        foreach ((array) $authenticatingAuthorities as $key => $authenticatingAuthority) {
            if ($authenticatingAuthority['__v'] === $this->getCurrentEntity()) {
                unset($authenticatingAuthorities[$key]);
            }
        }
        if ($this->getCurrentEntityUrl('idPMetadataService') !== $sourceResponse['saml:Issuer']['__v']) {
            $authenticatingAuthorities[] = array('__v' => $sourceResponse['saml:Issuer']['__v']);
        }

        $acs = $this->_getRequestAssertionConsumer($request);

        $subjectConfirmation = &$response['saml:Assertion']['saml:Subject']['saml:SubjectConfirmation']['saml:SubjectConfirmationData'];
        $subjectConfirmation['_Recipient'] = $request['_AssertionConsumerServiceURL'];
        $subjectConfirmation['_InResponseTo'] = $request['_ID'];

        $response['saml:Assertion']['saml:Issuer'] = array('__v' => $response['saml:Issuer']['__v']);
        $response['saml:Assertion']['saml:Conditions']['saml:AudienceRestriction']['saml:Audience']['__v'] = $request['saml:Issuer']['__v'];

        return $response;
    }

    public function createNewResponse($request, $attributes = array()) {
        $response = $this->_createBaseResponse($request);

        $soon = $this->timeStamp($this->getConfig('NotOnOrAfter', 300));
        $sessionEnd = $this->timeStamp($this->getConfig('SessionEnd', 60 * 60 * 12));

        $response['saml:Assertion'] = array(
            '_xmlns:xsi' => 'http://www.w3.org/2001/XMLSchema-instance',
            '_xmlns:xs' => 'http://www.w3.org/2001/XMLSchema',
            '_xmlns:samlp' => 'urn:oasis:names:tc:SAML:2.0:protocol',
            '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',

            '_ID' => $this->getNewId(),
            '_Version' => '2.0',
            '_IssueInstant' => $response['_IssueInstant'],

            'saml:Issuer' => array('__v' => $response['saml:Issuer']['__v']),
            'ds:Signature' => '__placeholder__',
            'saml:Subject' => array(
                'saml:NameID' => array(
                    '_SPNameQualifier' => $this->getCurrentEntityUrl(),
                    '_Format' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                    '__v' => $this->getNewId(),
                ),
                'saml:SubjectConfirmation' => array(
                    '_Method' => 'urn:oasis:names:tc:SAML:2.0:cm:bearer',
                    'saml:SubjectConfirmationData' => array(
                        '_NotOnOrAfter' => $soon,
                        '_Recipient' => $request['_AssertionConsumerServiceURL'], # req issuer
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

    protected function _createBaseResponse($request) {
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

        if ($acsUrl = $request['_AssertionConsumerServiceURL']) {
            // @todo check that the request is signed before accepting acsURLs
            // saml2int check that it is present in metadata may do for now ...
            // but we have to have a sam2int config flag to enable this in the future
            $found = false;
            foreach ((array) $remoteEntity['SP']['AssertionConsumerService'] as $acs) {
                if ($found = $acs['Location'] == $acsUrl) break;
            }
            if ($found) {
                $response['_Destination'] = $acsUrl;
                $response['__']['ProtocolBinding'] = $request['_ProtocolBinding'];
            }
        } elseif (isset($request['_AssertionConsumerServiceIndex'])
                && $acsindex = $request['_AssertionConsumerServiceIndex']
                        && isset($remoteEntity['SP']['AssertionConsumerService'][$acsindex])) {
            $acs = $remoteEntity['SP']['AssertionConsumerService'][$acsindex];
            $response['_Destination'] = $acs['Location'];
            $response['__']['ProtocolBinding'] = $acs['Binding'];
        } else {
            $acsindex = $remoteEntity['SP']['AssertionConsumerService']['default'];
            $acs = $remoteEntity['SP']['AssertionConsumerService'][$acsindex];
            $response['_Destination'] = $acs['Location'];
            $response['__']['ProtocolBinding'] = $acs['Binding'];
        }

        if (!$response['_Destination']) {
            throw new Corto_ProxyServer_Exception("No (allowed) Destination in request or metadata for: $destinationID");
        }

        return $response;
    }

    protected function _getRequestAssertionConsumer(array $request) {
        $acs = array();
        if (isset($request['_AssertionConsumerServiceURL'])) {
            $acs['Location'] = $request['_AssertionConsumerServiceURL'];
            $acs['Binding'] = $request['_ProtocolBinding'];
        } else {
            $remoteEntity = $this->getRemoteEntity($request['saml:Issuer']['__v']);
            $acs = $remoteEntity['AssertionConsumerService'];
        }
        return $acs;
    }

    function sendResponseToRequestIssuer($request, $response) {
        $requestIssuer = $request['saml:Issuer']['__v'];
        $sp = $this->getRemoteEntity($requestIssuer);

        if ($response['samlp:Status']['samlp:StatusCode']['_Value'] == 'urn:oasis:names:tc:SAML:2.0:status:Success') {

            $this->filterOutputAssertionAttributes($response, $request);

            return $this->getBindingsModule()->send($response, $sp);
        }
        else {
            unset($response['saml:Assertion']);
            return $this->getBindingsModule()->send($response, $sp);
        }
    }

    public
    function getReceivedRequestFromResponse($id) {
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

        if (!isset($_SESSION[$originalRequestId]['SAMLRequest'])) {
            throw new Corto_ProxyServer_Exception('Response has no known Request');
        }
        return $_SESSION[$originalRequestId]['SAMLRequest'];
    }

////////  ATTRIBUTE FILTERING /////////

    public function filterInputAssertionAttributes(&$response, $request) {
        $hostedEntityMetaData = $this->_metadata['current'];

        $responseIssuer = $response['saml:Issuer']['__v'];
        $idpEntityMetadata = $this->getRemoteEntity($responseIssuer);

        $requestIssuer = $request['saml:Issuer']['__v'];
        $spEntityMetadata = $this->getRemoteEntity($requestIssuer);

        if (isset($hostedEntityMetaData['infilter'])) {
            $this->callAttributeFilter($hostedEntityMetaData['infilter'], $response, $request, $spEntityMetadata, $idpEntityMetadata);
        }
    }

    public function filterOutputAssertionAttributes(&$response, $request) {
        $hostedMetaData = $this->_metadata['current'];

        $responseDestination = $response['__']['destinationid'];
        $idpEntityMetadata = $this->_metadata['remote'][$responseDestination];

        $hostedMetaData = $this->_metadata['current'];
        $remoteMetaData = $this->_metadata['remote'][$responseDestination];
        $requestIssuer = $request['saml:Issuer']['__v'];
        $spEntityMetadata = $this->getRemoteEntity($requestIssuer);

        if (isset($hostedMetaData['outfilter'])) {
            $this->callAttributeFilter($hostedMetaData, $hostedMetaData['outfilter'], $response, $request, $spEntityMetadata, $idpEntityMetadata);
        }
    }


    protected function callAttributeFilter($callback, array &$response, array $request, array $spEntityMetadata, array $idpEntityMetadata)
    {
        if (!$callback || !is_callable($callback)) {
            // @todo Non existing callbacks shouldn't give an exception, just a warning...
            throw new Corto_ProxyServer_Exception('callback: ' . var_export($callback, true) . ' isn\'t callable');
        }

        $responseAssertionAttributes = &$response['saml:Assertion']['saml:AttributeStatement'][0]['saml:Attribute'];

        // Take the attributes out
        $responseAttributes = Corto_XmlToArray::attributes2array($responseAssertionAttributes);
        // Pass em along
        call_user_func_array($callback, array(&$response, &$responseAttributes, $request, $spEntityMetadata, $idpEntityMetadata));
        // Put em back where they belong
        $responseAssertionAttributes = Corto_XmlToArray::array2attributes($responseAttributes);
    }

////////  TEMPLATE RENDERING /////////

    public function renderTemplate($templateName, $vars = array(), $parentTemplates = array()) {
            $this->getSessionLog()->debug("Rendering template '$templateName'");
            if (!is_array($vars)) {
                $vars = array('content' => $vars);
            }

            $templateFileName = $templateName . '.phtml';

            ob_start();

            $this->_renderTemplate($templateFileName, $vars);

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

    protected function _renderTemplate($templateFileName, $vars) {
            extract($vars);

            $source = $this->getTemplateSource();
            switch ($source['type'])
            {
                case self::TEMPLATE_SOURCE_MEMORY:
                    if (!isset($source['arguments'][$templateFileName])) {
                        throw new Corto_ProxyServer_Exception("Unable to load template '$templateFileName' from memory!");
                    }

                    eval('?>' . $source['arguments'][$templateFileName] . '<?');
                    break;

                case self::TEMPLATE_SOURCE_FILESYSTEM;
                    if (!isset($source['arguments']['FilePath'])) {
                        throw new Corto_ProxyServer_Exception('Template path not set, unable to render templates from filesystem!');
                    }

                    $filePath = $source['arguments']['FilePath'] . $templateFileName;
                    if (!file_exists($filePath)) {
                        throw new Corto_ProxyServer_Exception('Template file does not exist: ' . $filePath);
                    }

                    include($filePath);
                    break;
                default:
                    throw new Corto_ProxyServer_Exception('No template source set! Please configure a template source with Corto_ProxyServer->setTemplateSource()');
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
    public
    function getRawGet() {
        $rawGet = array();
        foreach (explode("&", $_SERVER['QUERY_STRING']) as $parameter) {
            if (preg_match("/^(.+)=(.*)$/", $parameter, $keyAndValue)) {
                $rawGet[$keyAndValue[1]] = $keyAndValue[2];
            }
        }
        return $rawGet;
    }

    public
    function redirect($location, $message) {
        $this->getSessionLog()->debug("Redirecting to $location");

        if ($this->getConfig('debug', true)) {
            $output = $this->renderTemplate('redirect', array('location' => $location, 'message' => $message));
            $this->sendOutput($output);
        } else {
            $this->sendHeader('Location', $location);
        }

    }

    public
    function sendHeader($name, $value) {
        return header("$name: $value");
    }

    public
    function sendOutput($rawOutput) {
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
    public
    function timeStamp($deltaSeconds = 0) {
        return gmdate('Y-m-d\TH:i:s\Z', time() + $deltaSeconds);
    }

    public
    function getNewId() {
        return sha1(uniqid(mt_rand(), true));
    }

    public
    function startSession() {
        session_write_close();
        session_set_cookie_params(0, $this->getConfig('cookie_path', '/'), '', $this->getConfig('use_secure_cookies', true));
        session_name(sha1($this->_metadata['current']['entityID']));
        session_start();
    }

    protected
    function restartSession($newId, $newName) {
        session_write_close();

        session_id($newId);
        session_name($newName);
        session_start();
    }

    /**
     * @return Corto_Log_Interface
     */
    public
    function getSystemLog() {
        if (!isset($this->_systemLog)) {
            $this->_systemLog = new Corto_Log_Dummy();
        }

        return $this->_systemLog;
    }

    public
    function getSessionLog() {
        if (isset($this->_sessionLog)) {
            return $this->_sessionLog;
        }

        $this->_sessionLogDefault = new Corto_Log_Dummy();
        if (!isset($this->_sessionLogDefault)) {
        }

        $sessionLog = $this->_sessionLogDefault;
        $sessionLog->setId(session_id());
        $this->_sessionLog = $sessionLog;
        return $this->_sessionLog;
    }

    public
    function setSystemLog(Corto_Log_Interface $log) {
        $this->_systemLog = $log;
    }

    public
    function setSessionLogDefault($logDefault) {
        $this->_sessionLogDefault = $logDefault;
    }
    }
