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

    require '../library/Corto/ProxyServer.php';
    $server = new Corto_ProxyServer();
    require '../filters/DemoFilter.php';

/*
 * If called without path - use demo.php
 */
    $metadatafile = '../configs/birk_optimized_metadata.php';

    if (empty($_SERVER['PATH_INFO']) || $_SERVER['PATH_INFO'] == '/moc.elgoog-ACS' || $_SERVER['PATH_INFO'] == '/ude@evil-ACS') {
        $server->setMetadata($metadatafile);
        $idplist = $server->getAllowedIDPs('testing', true);
        $proxyidps = array();
        foreach ($idplist as $ssoservice) {
            #if (preg_match("/\/proxy\//", $ssoservice)) {
                $proxyidps[] = $ssoservice;
            #}
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

function demoapp($idplist)
{
    $sharedkey = 'abrakadabra';
    $privatekey =
            "-----BEGIN RSA PRIVATE KEY-----
MIIEnQIBAAKCAQAA1H4O7YxF5wNnIACnSMISLmFtJACV7ued2LOVPfI/B109C1Iv
XPx9qlMGZ7TbFZIWJXCw65SRfboS2wh3QZ8acrCwjtnOgrnMXRbPEr7jfm0vgQnn
lzpZB0i4FkyFvyYzDSqcLTz9+xC7psHjA5umY+zaRa1prrvWoswKFszQsnjpi8Fm
TSky5FvoSj8dz4+YfRwLBxKuTp8LqMqLBn1HrUcQvU3ikFMJnwHpAAKndZBeUwUd
UxmFXxmMHsxTjFfiLGVsqViTYRi0xRRV4INCf982MGnSu8y/0ZkGpDUEJiLJyc7N
l84rLCOJx6NKnqd6l58v9zhj6J0dBPQv++6HAgMBAAECgf9tN8HKfT/spkYaH9vb
vMyFhFQJnjdyTSBHor5B0cJtsZHPwNVRUQHySqxPH5k/9A9n/Q0ieQFzAvHwHODX
HMUGUCTft7m6XW9aJYAXnX/mmo5BH+smQrpB0TG1XG2eOy8gRFdztRbCNe6Nnrhl
QVp7n+Ds0V4xjqCamo9Q+sMF+b0V7ZakIdmNx+onJhFELybEw4tsYueMIU6Xpgbi
qtc26LNdd43CSuM7O+s8wOF0iqoO/mW97dWgxsdBj78x1gO8wMV86126+Q8eV4Fx
NB/cCxrwaKTVWxMcYHM3oBsMsWHePdyxeBWZhGA7N4cw1t+1Eh8IQsZXP8XeaXaC
ZzkCgYAO2QoOOHwQ+9VTgw5M7yVViojGerC3ufskxHlPtBXV1d3ZqOFa1tD8yjmq
658Jeh8//fQ/jcjbNeBykZUhlKSr2B/sPLPat9XCjYfoaZvFZgDIKPtrHTrapMAa
e/Y/R5AOTM27GYg3gYLVkNG0433mrlb46n1qurxJ7kPLyKnWLQKBgA5PtZQq2O0g
YEV15HpeMTwD/9Kh9jrxx6ZOUnEhbaCsjRq3sawVqpWgTN4DIHMwzpxTEreCuWdM
uzozwRW5AMmwfJEf/ImrngLKRl7GZKoIbBFlv6Y2/z90A2KAX6QrlUtBgPRNKCM8
coSEsa/K24x0J+P9H2HUegwlbZpVR5wDAoGAAXZ+2CHWj3HQddbuvMO/IOtySGPk
L2XiiZ/V9/VdRWE5520NLv8FPjLKdb2bQLrIg2yI+Q4GIRrwzzjqwZE8nDXCB2t/
qOf95po9LrfhAhTntNDc3JPXrZ0X1EQsYdWyKsaEao+8bQOUmWgYUUMsr2Kz7Phl
fPODA6G3Ckft+80CgYAGTog1iIBaV2c1lROf/Xxy90w4tZk+NqiGGIPqSRH3ubLh
MEyDCnVHRQI64GPff4W9jDp2VoyAAmeL6ZzQhtvbBgSPK+ptfQzALAXA5GseJ2IA
dLd1d00a2HRZZzs+rNo49N/wSURD6vKIhbWMQ7hm+BVQOo8m3K0AR0o6thQ9owKB
gAP1d86vWz79QiNeNYhH2EuPCYZjNPreq2IUfToIJx02OA3qoZAv6HdyFRATdQ2i
zcnEq7or8y9LAPmLqLfMWCnCDLS8nb+EsIO3xA03UDq0USAe+nnvwCJTQxgP8ypx
pKQ+xQF7edbfGUNwK72pZ5Ag3Yq+GwFKV0lxJ1zFUsyo
-----END RSA PRIVATE KEY-----";

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
            '_AssertionConsumerServiceIndex' => 0,
            '_AttributeConsumingServiceIndex' => 5,
            '_ProtocolBinding' => 'JSON-Redirect',
            'saml:Issuer' => array('__v' => "$birk/$sp"),
        );

        $relayState = 'Dummy RelayState ...';
        #$request['samlp:Scoping']['_ProxyCount'] = 2;
        $location = $request['_Destination'];
        $query = "SAMLRequest=" . urlencode(base64_encode(gzdeflate(json_encode($request))))
                . ($relayState ? '&RelayState=' . urlencode($relayState) : '');
        #print render('redirect', array('location' => $location, 'message' => $request));
        if (true) {
            $query .= '&SigAlg=' . urlencode('http://www.w3.org/2000/09/xmldsig#rsa-sha1');
            $key = openssl_pkey_get_private($privatekey);
            $signature = "";
            openssl_sign($query, $signature, $key, OPENSSL_ALGO_SHA1);
            openssl_free_key($key);
            $location .= '?' . $query . '&Signature=' . urlencode(base64_encode($signature));
        }
        header('Location: ' . $location);
        exit;
    }
    $relayState = $rs = $message = null;
    $response = nvl($_GET, 'SAMLResponse');
    $SAMLResponse = json_decode(gzinflate(base64_decode($response)), 1);

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

function render($template, $vars = array())
{
    extract($vars); // Extract the vars to local namespace
    ob_start(); // Start output buffering
    include('../templates/' . $template . '.phtml'); // Include the file
    $content = ob_get_contents(); // Get the content of the buffer
    ob_end_clean(); // End buffering and discard
    return $content; // Return the content
}
