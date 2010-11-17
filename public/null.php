<?php
require '../library/Corto/cortolib.php';


$sharedkey = 'abrakadabra';
$privatekey =
"-----BEGIN RSA PRIVATE KEY-----
MIIEmwIBAAKCAQAAqy8WhGwxwupZOTt88F9BzqcgD/Hu8SukmerGhLhKMWtx46AA
SFv8VPP4Sg46JhUYy8uuyR7urLxYCLdxw/Fqbkfg50nI2zDhZ6Lz6Pm/ktqGLNAh
D0x0em0Wd6C9236SnHD6HJquOd8V+Lpus+5tGZ4XjanJ00g/zwubAGCd0KCufI8A
G4Y90dDoONhD/2NLDHlldqDS3Lkel5ntsK8GQq+cP/UpDuCtXOq8PlCONO5iY+Im
eXPUqjqOHCviWlOO5l/CJQBq5KbnixJtTwzcS8SILSTlQQXN2ttgqeIq065mcWU2
IgV/13PHA0kQXr6f+tGOL6ljgiafVct54soLAgMBAAECgf8SAdwOhgseA+Tq3lUg
PAUCJhZ7VunZuMuR3V6Qq4oydKkAVt5wvixnC1r8/04in2mCVqTGR1i4Fv/zushe
4lBd1XXVHq/gTt4HNt8NjOgYHKCsqiAwKcy+7CbG4sPWCRSHHGNTCvp04ADBr2rh
xpz3aufzYP74GMuNjhz6By/StbO2stjT1yBVxBbZdgMwXCaW6sK60LJlBUF3h8pY
DGvzuvJSakP1a7OS1dt0eR7BQZOVEFVFDrZLz45RVQyrOSRhuTaghC/rx9uSQdLx
5EDRHC3bTahSwkOOFqgJKSHyzFGEIJY8jmJuE78bet3fcPNj7BGsStl+W5SbkECO
/DECgYANF0HuM6IRhv7hSDW4Tx28xM9Ii018i2LFmXyW+QSOkBBs5j7IlK/fUiGh
PlHH2255w6RNDuG752sHy5dLWKJqAxcc+N5a9EyNjEbtiaNnlcIR0gdjwLo/7VrD
kLAHCHieMQKWBwzYjIGvJjqbpbkx2M+OvVixam221vSN/EdwnQKBgA0TnLbysli1
dDqvxguCRdyhTpfy1VClb2sSjk1gXb8F0vEpz7CwAqERnNJIJFyctCxmpxPHtBbd
VY7rx1635xRDvO6NzDkqP5SXHxtpqNpsvCm59E9z+imuSE9vI1QAHviUeootCPkA
PYziKwIuCHGQstG4sHqLC3wTRfO9D0DHAn8nEUGxoGYL6NS/fsDTS0l0EeaKmTCm
f1RGYclwxbjTvR1H4dt8wEAeOP4kN9fYmwUYXsX3MnJ6VCkXGoBqXBpYRuCzlgQB
bRMJW5pRTHJcsJJ8nFFxYbp1DeXRvfuXAbD2aU1Ob7vmh2x/SZee6vXFzUWgt3P6
BaVoBBnToxGRAoGACQBPB7/X9CgzcZI9CP8Lh+uhZgbJv1GheFq1iZ2j6jHgGhFl
3YHKzYSKJlVyci2L+GRQ7dSxqmuA0XiLLC/66IAYNT12LoNecLH1v7DjgjcG7tIJ
0gdLVBWbwNIHx3Kt3v6Vuzd0zbHUrH2ijUWSmlm4PZScJj5AEZBSvoyNS1ECgYAJ
R5saP5aJeR2ekvtGFc7jdEt6Xkgmtz2t8Lbpa8XHVWUH2F0DiVRVgBHkYHIY1SNO
18EB1TOsCkJWJj2sWyJZBbppBdobfjfx8/6pK2xwmKgaqzUsd0cKGY27bkXl2a42
16+9G/Q5QlvTY6C2CLuy5TYQ+20OxqLjMxkSvdci8Q==
-----END RSA PRIVATE KEY-----";

$entityID = 'http' . (nvl($_SERVER, 'HTTPS') ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'];
$request = json_decode(decrypt(gzinflate(base64_decode($_GET['SAMLRequest'])), $sharedkey), 1);
$now = timeStamp();
$soon = timeStamp(300);
$sessionEnd = timeStamp(60 * 60 * 12);
$response = array(
    '__t' => 'samlp:Response',
    '__' => array(
        'paramname' => 'SAMLResponse',
        'RelayState' => !empty($request['__']['RelayState']) ? $request['__']['RelayState'] : NULL,
),
    '_xmlns:samlp' => 'urn:oasis:names:tc:SAML:2.0:protocol',
    '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
    '_ID' => ID(),
    '_Version' => '2.0',
    '_IssueInstant' => $now,
    '_InResponseTo' => $request['_ID'],
    'saml:Issuer' => array('__v' => $entityID),
    'samlp:Status' => array(
        'samlp:StatusCode' => array(
            '_Value' => 'urn:oasis:names:tc:SAML:2.0:status:Success',
),
),
);

$destinationid = $request['saml:Issuer']['__v'];
$response['__']['destinationid'] = $destinationid;

if ($acsurl = $request['_AssertionConsumerServiceURL']) {
	$response['_Destination'] = $acsurl;
	$response['__']['ProtocolBinding'] = $request['_ProtocolBinding'];
} else {
	die("No Destination in request or metadata for: $destinationid");
}

$response['saml:Assertion'] = array(
    '_xmlns:xsi' => 'http://www.w3.org/2001/XMLSchema-instance',
    '_xmlns:xs' => 'http://www.w3.org/2001/XMLSchema',
    '_xmlns:samlp' => 'urn:oasis:names:tc:SAML:2.0:protocol',
    '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
    '_ID' => ID(),
    '_Version' => '2.0',
    '_IssueInstant' => $now,
    'saml:Issuer' => array('__v' => $entityID),
    'ds:Signature' => '__placeholder__',
    'saml:Subject' => array(
        'saml:NameID' => array(
            '_SPNameQualifier' => $entityID,
            '_Format' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
            '__v' => ID(),
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
        '_NotBefore' => $now,
        '_NotOnOrAfter' => $soon,
        'saml:AudienceRestriction' => array(
            'saml:Audience' => array('__v' => $request['saml:Issuer']['__v']),
),
),
    'saml:AuthnStatement' => array(
        '_AuthnInstant' => $now,
        '_SessionNotOnOrAfter' => $sessionEnd,
#			'_SessionIndex' => ID(),
        'saml:SubjectLocality' => array(
            '_Address' => $_SERVER['REMOTE_ADDR'],
            '_DNSName' => !empty($_SERVER['REMOTE_HOST']) ? $_SERVER['REMOTE_HOST'] : gethostbyaddr($_SERVER['REMOTE_ADDR']),
),
        'saml:AuthnContext' => array(
            'saml:AuthnContextClassRef' => array('__v' => 'urn:oasis:names:tc:SAML:2.0:ac:classes:Password'),
),
),
);

$attributes['uid'][] = 'abc@null';
$attributes['idp'][] = $request['saml:Issuer']['__v'];
foreach ((array) $attributes as $name => $attr) {
	$newattr = array(
        '_Name' => $name,
        '_NameFormat' => 'urn:oasis:names:tc:SAML:2.0:attrname-format:basic',
	);
	foreach ((array) $attr as $val) {
		$newattr['saml:AttributeValue'][] = array(
            '_xsi:type' => 'xs:string',
            '__v' => $val,
		);
	}
	$res[] = $newattr;
}


$response['saml:Assertion']['saml:AttributeStatement'][0]['saml:Attribute'] = $res;

$location = $response['_Destination'];
$query = "SAMLResponse=" . urlencode(base64_encode(gzdeflate(json_encode($response))));

if (true) {
     $query .= '&SigAlg=' . urlencode('http://www.w3.org/2000/09/xmldsig#rsa-sha1');
     $key = openssl_pkey_get_private($privatekey);
     $signature = "";
     openssl_sign($query, $signature, $key, OPENSSL_ALGO_SHA1);
     openssl_free_key($key);
     $location .= '?' . $query . '&Signature=' . urlencode(base64_encode($signature));
 }

?>
<html>
<body>
<p>This is the response from the null authenticator!</p>
<a href="<?php echo $location ?>">GO</a>
<pre>
<?php print_r($response); print_r($request); ?>
</pre>
</body>
</html>
