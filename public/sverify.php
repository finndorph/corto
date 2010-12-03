<?php
/**
 * Created by PhpStorm.
 * User: freek
 * Date: Nov 24, 2010
 * Time: 5:05:45 PM
 * To change this template use File | Settings | File Templates.
 */

include "../library/Corto/XmlToArray.php";

if ($xml = $_POST['msg']) {
    $xml = stripslashes($xml);
    $element = Corto_XmlToArray::xml2array($xml);

    print "<pre>";

    print_r($element);

    $signatureValue = base64_decode($element['ds:Signature']['ds:SignatureValue']['__v']);
    $digestValue = ($element['ds:Signature']['ds:SignedInfo']['ds:Reference'][0]['ds:DigestValue']['__v']);
    $certificate = $element['ds:Signature']['ds:KeyInfo']['ds:X509Data']['ds:X509Certificate']['__v'];

    $publicKey = "-----BEGIN CERTIFICATE-----\n" . chunk_split($certificate, 64) . "-----END CERTIFICATE-----";

#print_r($publicKey);

    $document = DOMDocument::loadXML($xml);
    $xp = new DomXPath($document);
    $xp->registerNamespace('ds', 'http://www.w3.org/2000/09/xmldsig#');

    $id = $element['_ID'];
    $signedElement = $xp->query("//*[@ID = '$id']")->item(0);
    $signature = $xp->query(".//ds:Signature", $signedElement)->item(0);
    $signedInfo = $xp->query(".//ds:SignedInfo", $signature)->item(0)->C14N(true, false);
    $signature->parentNode->removeChild($signature);
    $canonicalXml = $signedElement->C14N(true, false);

    print_r(htmlspecialchars($xml));
    print "\n";
    print_r(htmlspecialchars($canonicalXml));

    print "\n\n";

    $newdigest = base64_encode(sha1($canonicalXml, true));
    $digestMatches = ($newdigest == $digestValue);

    if (!$digestMatches) {
        print "Digest didn't match ... $newdigest != $digestValue\n";
    } else {

    }
    if (!openssl_verify($signedInfo, $signatureValue, $publicKey) == 1) {
        print "Signature didn't validate ...\n";

    }
    ;

}

?>

<html>
<body>
<form method="POST">
    <textarea name="msg"></textarea><br>
    <input type="submit" value="Verify">
</form>
</body>
</html>
