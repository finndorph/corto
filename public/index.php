<?php

if (empty($_SERVER['PATH_INFO'])) {
    include '../library/Corto/cortolib.php';
    demoapp();
}
else {
    include 'corto.php';
}


function demoapp() {
    $sharedkey = 'abrakadabra';

    $corto = join("/", array_slice(explode("/", 'http' . (nvl($_SERVER, 'HTTPS') ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME']), 0, -1));

    $self = $corto . '/index.php';
    $corto = $corto . '/corto.php';
    if (isset($_POST['doslo'])) {
        $request = array(
            '__t' => 'samlp:LogoutRequest',
            '_ID' => ID(),
            '_Version' => '2.0',
            '_IssueInstant' => gmdate('Y-m-d\TH:i:s\Z', time()),
            '_Destination' => "$corto/sp/Mads/SLO",
            'saml:Issuer' => array('__v' => $self),
            'saml:NameID' => json_decode(stripcslashes($_POST['subject']), 1),
            '_NotOnOrAfter' => timeStamp(10),
        );
        $location = $request['_Destination'];
        $location .= "?SAMLRequest=" . urlencode(base64_encode(gzdeflate(json_encode($request))));
        print render('redirect', array('location' => $location, 'message' => $request));
        exit;

    }
    if (isset($_POST['doit'])) {
        $idp = empty($_POST['idp']) ? NULL : $_POST['idp'];
        if (!$idp) {
            $idp = "sp";
        }
        $request = array(
            '_ID' => ID(),
            '_Version' => '2.0',
            '_IssueInstant' => gmdate('Y-m-d\TH:i:s\Z', time()),
            '_Destination' => "$corto/$idp/Mads",
            '_ForceAuthn' => !empty($_REQUEST['ForceAuthn']) ? 'true' : 'false',
            '_IsPassive' => !empty($_REQUEST['IsPassive']) ? 'true' : 'false',
            #            '_AssertionConsumerServiceURL' => $corto,
            'AssertionConsumerServiceIndex' => 0,
            '_AttributeConsumingServiceIndex' => 5,
            '_ProtocolBinding' => 'JSON-Redirect',
            'saml:Issuer' => array('__v' => $self),
        );

        if (!empty($_REQUEST['IDPList'])) {
            foreach ((array) $_REQUEST['IDPList'] as $idp) {
                $idpList[] = array('_ProviderID' => $idp);
                $request['samlp:Scoping']['samlp:IDPList']['samlp:IDPEntry'] = $idpList;
            }
        }

        $relayState = 'Dummy RelayState ...';
        #$request['samlp:Scoping']['_ProxyCount'] = 2;
        $location = $request['_Destination'];
        $location .= "?SAMLRequest=" . urlencode(base64_encode(gzdeflate(json_encode($request))))
                . ($relayState ? '&RelayState=' . urlencode($relayState) : '');
        print render('redirect', array('location' => $location, 'message' => $request));
        exit;
    }
    $relayState = $rs = $message = null;
    $response = nvl($_GET, 'SAMLResponse');
    $SAMLResponse = json_decode(gzinflate(base64_decode($response)), 1);

    if (isset($_POST['RelayState']) && $rs = $_POST['RelayState']) {
        $rs = '&RelayState=' . $rs;
    }

    print render(
        'demo',
        array(
            'action' => $self,
            'SAMLResponse' => $SAMLResponse,
            'message' => "RelayState: " . nvl($_GET, 'RelayState'),
            'self' => $self)
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
