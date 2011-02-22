<?php
/**
 * Created by PhpStorm.
 * User: freek
 * Date: Nov 23, 2010
 * Time: 8:37:01 PM
 * To change this template use File | Settings | File Templates.
 */

class LiveAtEduFilter {

    static function liveatedu($params)
    {
        $acs = $params['cortodata']['response']['_Destination'];
        $assertion = &$params['cortodata']['response']['saml:Assertion'];
        $samlattribute = $assertion['saml:AttributeStatement'][0]['saml:Attribute'];
        $attributes = attributes2array($samlattribute);
        $dollar = array();
        preg_match("/^(.*)@/", $attributes['eduPersonPrincipalName'][0], $dollar);

        $fid = $dollar[1];
        foreach ($attributes['eduPersonEntitlement'] as $epn) {
            if (preg_match("/^http:\\/\\/wayf\\.dk\\/live@edu\\/(.*)$/", $epn, $dollar)) {
                $domain = $dollar[1];
                break;
            }
        }

        $newattributes['urn:oid:1.3.http://wayf.dk/live@edu/saml.live.wayf.dk6.1.4.1.5923.1.1.1.6'] = array('na@' . $domain);
        unset($assertion['saml:AttributeStatement']);
        $assertion['saml:AttributeStatement'][0]['saml:Attribute'] = array2attributes($newattributes);
        unset($assertion['saml:AuthnStatement']['saml:AuthnContext']['saml:AuthenticatingAuthority']);

        $assertion['saml:Subject']['saml:NameID'] = Array(
            '_Format' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
            '__v' => $fid,
        );

        $assertion['saml:Conditions']['saml:AudienceRestriction']['saml:Audience']['__v'] = 'uri:WindowsLiveID';
        $assertion['saml:Subject']['saml:SubjectConfirmation']['saml:SubjectConfirmationData']['_Recipient'] = $acs;

        return $params['cortodata'];
    }
}