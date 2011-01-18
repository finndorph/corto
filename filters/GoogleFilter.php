<?php
/**
 * Created by PhpStorm.
 * User: freek
 * Date: Nov 23, 2010
 * Time: 8:37:01 PM
 * To change this template use File | Settings | File Templates.
 */

class GoogleFilter {

    static function google($params)
    {
        $uid = 'antonten';
        #self::provision($uid, '1234567890', 'Anton', 'Banton');
        $acs = $params['cortodata']['response']['_Destination'];
        $assertion = &$params['cortodata']['response']['saml:Assertion'];
        $samlattribute = $assertion['saml:AttributeStatement'][0]['saml:Attribute'];
        $attributes = attributes2array($samlattribute);
        $dollar = array();
        preg_match("/^(.*)@/", $attributes['eduPersonPrincipalName'][0], $dollar);

        $mail = $dollar[1];
        #$mail = $uid;

        unset($assertion['saml:AttributeStatement']);
        unset($assertion['ds:Signature']);
        unset($assertion['saml:AuthnStatement']['saml:AuthnContext']['saml:AuthenticatingAuthority']);

        $assertion['saml:Subject']['saml:NameID'] = Array(
            '_Format' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
            '_SPNameQualifier' => "google.com",
            '__v' => $mail,
        );

        $assertion['saml:Conditions']['saml:AudienceRestriction']['saml:Audience']['__v'] = $acs;
        $assertion['saml:Subject']['saml:SubjectConfirmation']['saml:SubjectConfirmationData']['_Recipient'] = $acs;
        return $params['cortodata'];
    }


    static function provision($userName, $password, $familyName, $givenName)
    {
        $req = <<<eor
<?xml version="1.0" encoding="UTF-8"?>
<atom:entry xmlns:atom="http://www.w3.org/2005/Atom"
  xmlns:apps="http://schemas.google.com/apps/2006">
    <atom:category scheme="http://schemas.google.com/g/2005#kind"
        term="http://schemas.google.com/apps/2006#user"/>
    <apps:login userName="$userName"
        password="$password" suspended="false"/>
    <apps:name familyName="$familyName" givenName="$givenName"/>
</atom:entry>
eor;

        $header = "Content-type: application/atom+xml\r\n";
        $header .= 'Content-length: ' . strlen($req) . "\r\n";
        $header .= "Authorization: GoogleLogin auth=DQAAAJ0AAACoELVWAAhLCQUecGu08_CoxCp2Qee-zzGts2ZFPbRLSQcF5F7xJjdtFo_unBsHBCkf2jgYHmoFeKDPyJCXGcTvECfROwLl-LAMiQBXm7jwMr23x__qQZOnsa9TEBWZbuPhz97XSNvBTLmwsGKteuip1tWJe1b8dyuzToH6WYZujnZC9V_XVPm0R0fhs11iAfFO9EfGSOTogwYgdNBtcdtQ\r\n";
        $context = stream_context_create(array(
            'http' => array(
                'method' => 'POST',
                'header' => $header,
                'content' => $req,
                'timeout' => 5,
            ),
        ));
        $ret = "";
        try {
            $ret = @file_get_contents('https://apps-apis.google.com/a/feeds/g.wayf.dk/user/2.0', false, $context);
        } catch (Exception $e) {

        }
        debug("headers: ", $http_response_header);
        debug("body: ", $ret);
    }

}