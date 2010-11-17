<?php


require_once 'Abstract.php';

/**
 * Service specific exception
 *
 */
class Corto_Module_Services_Exception extends Corto_ProxyServer_Exception {
}

/**
 * Services handles the actual SSO/SLO services:
 * - SingleSignonService
 * - SingleLogout
 * - AssertionConsumerService
 * - ArtifactResolutionService
 *
 * @throws Corto_Module_Services_Exception|Corto_ProxyServer_Exception
 *
 */

class Corto_Module_Services extends Corto_Module_Abstract {

    /**
     * Catch unknow services
     *
     * @throws Corto_ProxyServer_Exception
     * @param  $name
     * @param  $arguments
     * @return void
     */
    public function __call($name, array $arguments)
    {
        throw new Corto_Module_Services_Exception("No Service ($name) found for: " . print_r($arguments, 1));
    }

    /**
     * Handle an authentication request.
     *
     * @param  array $params
     * @return void
     *
     */

    public function singleSignOnService($params)
    {
        if (initfilters()) {
            $request = $this->_server->getBindingsModule()->receiveRequest($params);
            /**
             * We are always a proxy so if the scoped proxycount == 0, respond with a ProxyCountExceeded error
             * @todo register path length in cached responses and use in proxyCount check ??
             */

            if (nvl2($request, 'samlp:Scoping', '_ProxyCount') === 0) {
                $server->getSessionLog()->debug("SSO: Proxy count exceeded!");
                $response = $server->createErrorResponse($request, 'ProxyCountExceeded');
                return $server->sendResponseToRequestIssuer($request, $response);
            }

            $filterparams = array(
                'request' => $request,
                'params' => $params,
                'server' => $this->_server,
            );
            $state = 'abc';
            $demofilters = array(array('php' => 'StdSingleLogonService::sso'));
        }

        if (dorequestfilter($state, $demofilters, $filterparams)) {
        }
    }

    /**
     * Handle a SingleLogout request/response
     *
     * @param  array $params
     * @return void
     *
     */

    public function SingleLogoutService(array $params)
    {
        $message = $this->_server->getBindingsModule()->receiveRequest($params);
        if ('samlp:LogoutRequest' == $message['__t']) {
            $this->_server->sloinit($message);
        } elseif ('samlp:LogoutResponse' == $message['__t']) {
            $this->_server->handleslo($message);
        } else {
            throw new Corto_Module_Services_Exception("Unknown message received at SigleLogoutService: " . print_r($message, 1));
        }
    }

    /**
     * Handle an authentication response and send it on to the SP.
     * Handle filtering for both incoming and outgoing response
     *
     * @throws Corto_Module_Services_Exception
     * @param  $params
     * @return void
     */

    public function assertionConsumerService($params)
    {
        if (initfilters()) {
            $receivedResponse = $this->_server->getBindingsModule()->receiveResponse($params);

            // Get the ID of the Corto Request message
            if (!$receivedResponse['_InResponseTo']) {
                $message = "Unsollicited assertion (no InResponseTo in message) not supported!";
                throw new Corto_Module_Services_Exception($message);
            }

            $receivedRequest = $this->_server->getReceivedRequestFromResponse($receivedResponse['_InResponseTo']);
            #$demofilters = array(array('php' => 'DemoFilterClass::demofilter'));
            $state = get_defined_vars();
            $filterparams = array('request' => $receivedRequest,
                                  'response' => $receivedResponse);
        }

        // SP side filters

        if (doresponseinputfilters($state, $demofilters, $filterparams)) {

            extract($state);
            unset($state);
            $receivedResponse = $filterparams['response'];
            unset($filterparams);


            $proxySP = null;
            // @todo cross federation bridging NOT - we can't guarantee the uniqueness of entityid's !!!
            if ($proxyIDP = nvl($receivedRequest['__'], 'ProxyIDP')) {
                $proxySP = $params['EntityID'];
                $this->_server->setCurrentEntity($proxyIDP);
                $this->_server->startSession();
            }

            $receivedResponse = $this->_server->createEnhancedResponse($receivedRequest, $receivedResponse, $proxySP);
            $state = get_defined_vars();
            $filterparams = array('request' => $receivedRequest,
                                  'response' => $receivedResponse);
        }

        // IDP side filters

        if (doresponseoutputfilters($state, $demofilters, $filterparams)) {
            extract($state);
            unset($state);
            $receivedResponse = $filterparams['response'];
            unset($filterparams);

            return $this->_server->sendResponseToRequestIssuer($receivedRequest, $receivedResponse);
        }
    }

    /**
     * Handle sending response by artifact
     *
     * @return void
     */

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

                'saml:Issuer' => array('__v' => $this->_server->getCurrentMD('entityID')),
                $element => $message,
            ),
        );
        $this->_server->getBindingsModule()->_soapResponse($artifactResponse);
    }

    /**
     * Sends metadata for the current entity;
     * Currently ignores the binding, as it its always URI
     * @return void
     */

    public function metadataservice()
    {
        header('Content-type: application/samlmetadata+xml');
        $md = $this->_server->$this->getCurrentMD('original');
        print(Corto_XmlToArray::array2xml($md, 'md:EntityDescriptor'));
    }

}
