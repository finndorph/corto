<?php
/**
 * Created by PhpStorm.
 * User: freek
 * Date: Nov 11, 2010
 * Time: 4:46:23 PM
 * To change this template use File | Settings | File Templates.
 */

error_reporting(E_ALL);
session_save_path('/tmp');

set_error_handler('error2exception', E_ALL);

function error2exception($errno, $errmsg)
{
    throw new Exception('This Error Happened ' . $errno . ': ' . $errmsg);
}

try {

/*
 * If called without path - use demo.php
 */
    if (empty($_SERVER['PATH_INFO']) || $_SERVER['PATH_INFO'] == '/ACS') {
        include '../library/Corto/cortolib.php';

        demoapp();
        exit;
    }

    require '../library/Corto/ProxyServer.php';
    $server = new Corto_ProxyServer();
    require '../filters/DemoFilter.php';

/*
 * Initializing metadata for demo purposes
 */

    $metadatafile = dirname(__FILE__) . '/../configs/birk_optimized_metadata.php';

    /**
    require '../library/Corto/Module/Metadata.obsolete.php';

    $meta = new Corto_Module_Metadata();
    $remotemd = 'http://janus-dev.test.wayf.dk/module.php/janus/exportentities.php?type[]=saml20-idp&state=prodaccepted&external=corto';
    $md = Corto_XmlToArray::xml2array(file_get_contents($remotemd), true);

    $metadatasources = array(
        'federations' => array(
            'testing' => array(
                'public' => array(
                    'php:' . dirname(__FILE__) . '/../configs/birk.meta.php',
                    $md,
                ),
            ),
        ),
    );


    $meta->prepareMetadata($metadatasources, $metadatafile);

    $md = eval(file_get_contents($metadatafile));
    foreach ($md['federations']['testing'] as $id => $entity) {
        unset($entity['original']);
        if (nvl3($entity, 'IDP', 'corto:IDPList', 0) != 'https://wayf.wayf.dk') {
            $entities[$id] = $entity;
            continue;
        } else {
            $newid = preg_replace("/^(_HOSTED_)/", '$1/proxy', $id);
            $entity['corto:sharedkey'] = array(
                array('__v' => 'abrakadabra'),
            );
            $newentity = $entity;
            $newentity['IDP']['corto:IDPList'][0] = '_HOSTED_/wayf.wayf.dk';
            $newentity['IDP']['corto:IDPList'][1] = $id;
            $newentity['entityID'] = $newid;
            $sso = nvl3($newentity['IDP'], 'SingleSignOnService', 0, 'Location');
            $sso = preg_replace("/^(_HOSTED_)/", '$1/proxy', $sso);
            $newentity['IDP']['SingleSignOnService'][0]['Location'] = $sso;
            $lookuptablextra[$sso] = array(
                'EntityID' => $newid,
                'Service' => 'SingleSignOnService',
                'Binding' => 'JSON-Redirect',
            );

            $entities[$newid] = $newentity;

            unset($entity['IDP']['corto:IDPList']);
            $entity['IDP']['corto:IDPList'][0] = '_COHOSTED_/null.php';
            $entities[$id] = $entity;
        }
    }

    $export = array('federations' => array('testing' => $entities), 'lookuptable' => array('testing' => array_merge($md['lookuptable']['testing'], $lookuptablextra)));
    file_put_contents($metadatafile . '.tmp', "return " . var_export($export, true) . ";");
    @rename($metadatafile . '.tmp', $metadatafile);

*/
    $server->setMetadata($metadatafile);

    $server->setTemplatePath(dirname(__FILE__) . '/../templates/');


/*
* include standard modules
*/
    require '../library/Corto/Module/Services.php';
    $server->setServicesModule(new Corto_Module_Services($server));

    require '../library/Corto/Module/Bindings.php';
    $server->setBindingsModule(new Corto_Module_Bindings($server));

    require '../library/Corto/Log/Syslog.php';
    $server->setSystemLog(new Corto_Log_Syslog());

/*
 * Handle requests/responses to Corto
 */
    $server->serveRequest();
} catch (Exception $e) {
    header('HTTP/1.0 500 Internal Server Error');
    header('Content-Type: text/plain; charset=utf-8');
    $uri = 'http' . (nvl($_SERVER, 'HTTPS') ? 's' : '') . '://' . $_SERVER['HTTP_HOST']
            . $_SERVER['PHP_SELF'];
    echo("ERROR: $uri \n");
    echo($e->getMessage() . "\n");
    echo $e->getTraceAsString();
}

function demoapp()
{
    $sharedkey = 'abrakadabra';

    $birk = 'http' . (nvl($_SERVER, 'HTTPS') ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'];

    $self = $birk;

    if (isset($_POST['doslo'])) {
        $request = array(
            '__t' => 'samlp:LogoutRequest',
            '_ID' => sha1(uniqid(mt_rand(), true)),
            '_Version' => '2.0',
            '_IssueInstant' => gmdate('Y-m-d\TH:i:s\Z', time()),
            '_Destination' => "$birk/sp/Mads/SLO",
            'saml:Issuer' => array('__v' => $self),
            'saml:NameID' => json_decode(stripcslashes($_POST['subject']), 1),
            '_NotOnOrAfter' => timeStamp(10),
        );
        $location = $request['_Destination'];
        $location .= "?SAMLRequest=" . urlencode(base64_encode(gzdeflate(encrypt(json_encode($request), $sharedkey))));
        print render('redirect', array('location' => $location, 'message' => $request));
        exit;

    }
    if (isset($_POST['doit'])) {
        $sp = $_POST['sp'];
        $idp = $_POST['idp'];

        $request = array(
            '_ID' => sha1(uniqid(mt_rand(), true)),
            '_Version' => '2.0',
            '_IssueInstant' => gmdate('Y-m-d\TH:i:s\Z', time()),
            '_Destination' => $birk . '/proxy/wayf.supportcenter.dk/asg/saml2/idp/SSOService.php',
            '_ForceAuthn' => !empty($_REQUEST['ForceAuthn']) ? 'true' : 'false',
            '_IsPassive' => !empty($_REQUEST['IsPassive']) ? 'true' : 'false',
            #            '_AssertionConsumerServiceURL' => $corto,
            'AssertionConsumerServiceIndex' => 0,
            '_AttributeConsumingServiceIndex' => 5,
            '_ProtocolBinding' => 'JSON-Redirect',
            'saml:Issuer' => array('__v' => "$birk/$sp"),
        );

        $relayState = 'Dummy RelayState ...';
        #$request['samlp:Scoping']['_ProxyCount'] = 2;
        $location = $request['_Destination'];
        $location .= "?SAMLRequest=" . urlencode(base64_encode(gzdeflate(encrypt(json_encode($request), $sharedkey))))
                . ($relayState ? '&RelayState=' . urlencode($relayState) : '');
        #print render('redirect', array('location' => $location, 'message' => $request));
        header('Location: ' . $location);
        exit;
    }
    $relayState = $rs = $message = null;
    $response = nvl($_GET, 'SAMLResponse');
    $SAMLResponse = json_decode(decrypt(gzinflate(base64_decode($response)), $sharedkey), 1);

    if (isset($_POST['RelayState']) && $rs = $_POST['RelayState']) {
        $rs = '&RelayState=' . $rs;
    }

    print render(
        'birk',
        array(
            'action' => $self,
            #                'idps' => array_keys($GLOBALS['metabase']['remote']),
            'SAMLResponse' => $SAMLResponse,
            'message' => "RelayState: " . nvl($_GET, 'RelayState'),
            'self' => $self)
    );
}

function render($template, $vars = array())
{
    extract($vars); // Extract the vars to local namespace
    ob_start(); // Start output buffering
    include('../templates/' . $template . '.phtml'); // Include the file
    $content = ob_get_contents(); // Get the content of the buffer
    ob_end_clean(); // End buffering and discard
    return $content; // Return the content
}

