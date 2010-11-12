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

function error2exception($errno, $errmsg) {
    throw new Exception('This Error Happened ' . $errno . ': ' . $errmsg);
}

try {

    require '../library/Corto/ProxyServer.php';
    $server = new Corto_ProxyServer();
    require '../filters/DemoFilter.php';

/*
 * If called without path - use demo.php
 */
    $metadatafile = '../configs/birk_optimized_metadata.php';

    if (empty($_SERVER['PATH_INFO']) || $_SERVER['PATH_INFO'] == '/moc.elgoog-ACS'|| $_SERVER['PATH_INFO'] == '/ude@evil-ACS') {
        $server->setMetadata($metadatafile);
        $idplist = $server->getAllowedIDPs('testing', true);

        foreach($idplist as $ssoservice) {
            if (preg_match("/\/proxy\//", $ssoservice)) {
                $proxyidps[] = $ssoservice;
            }
        }

        demoapp($proxyidps);
        exit;
    }


/*
 * Initializing metadata for demo purposes
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

function demoapp($idplist) {
    $sharedkey = 'abrakadabra';

    $birk = 'http' . (nvl($_SERVER, 'HTTPS') ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'];

    $self = $birk;

    if (isset($_POST['doit'])) {
        $sp = $_POST['sp'];
        $idp = $_POST['idp'];

        $request = array(
            '_ID' => sha1(uniqid(mt_rand(), true)),
            '_Version' => '2.0',
            '_IssueInstant' => gmdate('Y-m-d\TH:i:s\Z', time()),
            '_Destination' => $idp,
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
            'SAMLResponse' => $SAMLResponse,
            'message' => "RelayState: " . nvl($_GET, 'RelayState'),
            'self' => $self,
            'idplist' => $idplist,)
    );
}

function render($template, $vars = array()) {
    extract($vars); // Extract the vars to local namespace
    ob_start(); // Start output buffering
    include('../templates/' . $template . '.phtml'); // Include the file
    $content = ob_get_contents(); // Get the content of the buffer
    ob_end_clean(); // End buffering and discard
    return $content; // Return the content
}
