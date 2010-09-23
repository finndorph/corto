<?php

demoapp();
exit;

function demoapp()
{
    $sharedkey = 'abrakadabra';

    $corto = join("/", array_slice(explode("/", 'http' . ($_SERVER['HTTPS'] ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME']), 0, -1));

    $self =  $corto . '/demo.php';
    $corto = $corto . '/index.php';
    if (isset($_POST['doit'])) {
        $idp = empty($_POST['idp']) ? NULL: $_POST['idp'];
        if (!$idp) {
            $idp = "sp";
        }
        $request = array(
            '_ID' => sha1(uniqid(mt_rand(), true)),
            '_Version' => '2.0',
            '_IssueInstant' => gmdate('Y-m-d\TH:i:s\Z', time()),
            '_Destination' => "$corto/$idp/Mads",
            '_ForceAuthn' => !empty($_REQUEST['ForceAuthn']) ? 'true' : 'false',
            '_IsPassive' => !empty($_REQUEST['IsPassive']) ? 'true' : 'false',
            '_AssertionConsumerServiceURL' => $corto,
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
        $location .= "?SAMLRequest=" . urlencode(base64_encode(gzdeflate(encrypt(json_encode($request), $sharedkey))))
                . ($relayState ? '&RelayState=' . urlencode($relayState) : '');
        print render('redirect', array('location' => $location, 'message' => $request));
        exit;
    }
    $relayState = $rs = $message = null;
    $response = nvl($_GET, 'SAMLResponse');
    $SAMLResponse = json_decode(decrypt(gzinflate(base64_decode($response)), $sharedkey), 1);

    if (isset($_POST['RelayState']) && $rs = $_POST['RelayState']) {
        $rs = '&RelayState=' . $rs;
    }

    print render(
        'demo',
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


function encrypt($cleartext, $passphrase)
{
#	return $cleartext;
    $key_len = mcrypt_get_key_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC);
    $iv_len = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC);
    $salt = mcrypt_create_iv(8, MCRYPT_DEV_URANDOM);
    list($key, $iv) = salted_key_and_iv($key_len, $iv_len, $passphrase, $salt);
    return 'Salted__' . $salt . mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $cleartext, MCRYPT_MODE_CBC, $iv);
}

function decrypt($ciphertext, $passphrase)
{
#	return $ciphertext;
    $key_len = mcrypt_get_key_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC);
    $iv_len = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC);
    $salt = substr($ciphertext, 8, 8);
    list($key, $iv) = salted_key_and_iv($key_len, $iv_len, $passphrase, $salt);
    return trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, substr($ciphertext, 16), MCRYPT_MODE_CBC, $iv));
}

function salted_key_and_iv($key_len, $iv_len, $passphrase, $salt)
{
    $desired_len = $key_len + $iv_len;
    $data = $dx = "";
    while (strlen($data) < $desired_len) {
        $dx = md5($dx . $passphrase . $salt, true);
        $data .= $dx;
    }
    return array(substr($data, 0, $key_len), substr($data, $key_len, $iv_len));
}
