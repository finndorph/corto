<?php
error_reporting(E_ALL);

$really = in_array('--really', $argv);

require dirname(__FILE__) . '/../library/Corto/cortolib.php';
require dirname(__FILE__) . '/../library/Corto/XmlToArray.php';
require dirname(__FILE__) . '/../library/Corto/Module/Metadata.php';

$metadatafile = dirname(__FILE__) . '/birk_optimized_metadata.php';

preparemetadataforbirk($metadatafile, $really);

function preparemetadataforbirk($metadatafile, $really = false)
{
    $meta = new Corto_Module_Metadata();

    $commonmd = array(
        'md:EntitiesDescriptor' => array(
            array(
                '__t' => 'md:EntitiesDescriptor',
                '_Name' => 'cortotest',
                '_ID' => 'pfx060dc7c6-cfc1-1e86-83b5-4f00cef754df',
                '_xmlns:md' => 'urn:oasis:names:tc:SAML:2.0:metadata',
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'md:EntityDescriptor' => array(
                    array(
                        '_entityID' => '_COMMON_',
                        'md:IDPSSODescriptor' => array(
                            array(
                                # '_WantAuthnRequestsSigned' => 'true',
                                'md:Extensions' => array(
                                    'mdattr:EntityAttributes' => array(
                                        'saml:Attribute' => array(
                                            array(
                                                '_Name' => 'corto:privatekey',
                                                'saml:AttributeValue' => array(
                                                    array('_use' => 'signing', '__v' => 'MIICXAIBAAKBgQCyaPQj2s9qbQvA2F4dxl9ts/hrF00krGg7wUnoX+oyxY80TFjx6mwZw1sr2YoJcDULoZA3SdicsyFctGrPjaZ7P2S5Y8p+Hiw78phps51z/XfASZCCXbOqy0w8UPcrP0tBwhig07EK0tPjlobMw7wOUFGiQ9p5IWB4pqexPQY1UQIDAQABAoGAG596ZW7EfILjtfkKIWwMbGzYAqS58fqrrMzRh6QKG9BQytUjVFlqYVbI7/IfmDSCUgmyzYymeCSX/sWEYBxbcSlZCTPvQ1Vq1SJgcg8aPRq+06z+KuByC70t3IFlFOH+KA1jzv397gMWMv1c3rHl86HTeoPzRJT7gHC4oFi/LG0CQQDlQvnARTSJc/I4f7HAul2Xbs8qvxJnpFt7zL5/LMTCZI5rNuL9gISoZnmBJJYTX4UrWDNTpbhunYU8nO+uWGCPAkEAxze1krTP9Zh1zAUUTH5RLs9iM6/CftQxe+lPd5ToVyHWJE0ICmP9zUavjOXIN2WN6xiOt1hWbUdEV/ntMb88HwJAI2tWhILsm/PCz0HDJ4BjZzriXLtKT6LP02+NWr6C43l/m0bOiNWrKQ0z5mTNns6aF1k4DMtElCpX5EZmrSvQNwJAbNLpxPIwh6B4+LHtnLuD7WYr5sAkJtQTE/UnC9Oz96TsLXhG5CYrBm+OhhEfheNb2wjXLSB8VcWQd952y64DUQJBAIHqOBy8/oy1A1Era/mReLAwsg7kW29/jXhqgHH9br0a0tx8Pmu0WDOKdoepGFOUBR2AX9Xr+dbfeUwLmKi7a1s='),
                                                    array('_use' => 'encryption', '__v' => 'MIICXAIBAAKBgQCyaPQj2s9qbQvA2F4dxl9ts/hrF00krGg7wUnoX+oyxY80TFjx6mwZw1sr2YoJcDULoZA3SdicsyFctGrPjaZ7P2S5Y8p+Hiw78phps51z/XfASZCCXbOqy0w8UPcrP0tBwhig07EK0tPjlobMw7wOUFGiQ9p5IWB4pqexPQY1UQIDAQABAoGAG596ZW7EfILjtfkKIWwMbGzYAqS58fqrrMzRh6QKG9BQytUjVFlqYVbI7/IfmDSCUgmyzYymeCSX/sWEYBxbcSlZCTPvQ1Vq1SJgcg8aPRq+06z+KuByC70t3IFlFOH+KA1jzv397gMWMv1c3rHl86HTeoPzRJT7gHC4oFi/LG0CQQDlQvnARTSJc/I4f7HAul2Xbs8qvxJnpFt7zL5/LMTCZI5rNuL9gISoZnmBJJYTX4UrWDNTpbhunYU8nO+uWGCPAkEAxze1krTP9Zh1zAUUTH5RLs9iM6/CftQxe+lPd5ToVyHWJE0ICmP9zUavjOXIN2WN6xiOt1hWbUdEV/ntMb88HwJAI2tWhILsm/PCz0HDJ4BjZzriXLtKT6LP02+NWr6C43l/m0bOiNWrKQ0z5mTNns6aF1k4DMtElCpX5EZmrSvQNwJAbNLpxPIwh6B4+LHtnLuD7WYr5sAkJtQTE/UnC9Oz96TsLXhG5CYrBm+OhhEfheNb2wjXLSB8VcWQd952y64DUQJBAIHqOBy8/oy1A1Era/mReLAwsg7kW29/jXhqgHH9br0a0tx8Pmu0WDOKdoepGFOUBR2AX9Xr+dbfeUwLmKi7a1s='),
                                                ),
                                            ),
                                        ),
                                    ),
                                ),
                                'md:KeyDescriptor' => array(
                                    array(
                                        '_use' => 'signing',
                                        'ds:KeyInfo' =>
                                        array(
                                            '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
                                            'ds:X509Data' =>
                                            array(
                                                'ds:X509Certificate' =>
                                                array(
                                                    '__v' => 'MIICiTCCAfICCQDzZZwa2zc89zANBgkqhkiG9w0BAQUFADCBiDELMAkGA1UEBhMCREsxEDAOBgNVBAgTB0Rlbm1hcmsxEzARBgNVBAcTCkNvcGVuaGFnZW4xDTALBgNVBAoTBFdheWYxDDAKBgNVBAsTA0RldjEXMBUGA1UEAxMOSm9lIFRoZSBUZXN0ZXIxHDAaBgkqhkiG9w0BCQEWDWZyZWVrQHdheWYuZGswHhcNMTAxMTI0MTUwMTMwWhcNMzgwNDEwMTUwMTMwWjCBiDELMAkGA1UEBhMCREsxEDAOBgNVBAgTB0Rlbm1hcmsxEzARBgNVBAcTCkNvcGVuaGFnZW4xDTALBgNVBAoTBFdheWYxDDAKBgNVBAsTA0RldjEXMBUGA1UEAxMOSm9lIFRoZSBUZXN0ZXIxHDAaBgkqhkiG9w0BCQEWDWZyZWVrQHdheWYuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBALJo9CPaz2ptC8DYXh3GX22z+GsXTSSsaDvBSehf6jLFjzRMWPHqbBnDWyvZiglwNQuhkDdJ2JyzIVy0as+Npns/ZLljyn4eLDvymGmznXP9d8BJkIJds6rLTDxQ9ys/S0HCGKDTsQrS0+OWhszDvA5QUaJD2nkhYHimp7E9BjVRAgMBAAEwDQYJKoZIhvcNAQEFBQADgYEAFwMpg+s8AdL7HSh7uGVI5cHjBeLvRHFityZiP1CLitNa/oED5ojC2vD+F9kQ3qRHmq9i4/pqBc8Xmlgway0XzvDG3glsAp9HnVCdwM7J5QapoAsNYqwPKl8sTeuaa+J78MBfTxKpqINd3ZXUNsr1BRtDJCXVA/u37835YVJsN/A=',
                                                ),
                                            ),
                                        ),
                                    ),
                                    array(
                                        '_use' => 'encryption',
                                        'ds:KeyInfo' =>
                                        array(
                                            '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
                                            'ds:X509Data' =>
                                            array(
                                                'ds:X509Certificate' =>
                                                array(
                                                    '__v' => 'MIICiTCCAfICCQDzZZwa2zc89zANBgkqhkiG9w0BAQUFADCBiDELMAkGA1UEBhMCREsxEDAOBgNVBAgTB0Rlbm1hcmsxEzARBgNVBAcTCkNvcGVuaGFnZW4xDTALBgNVBAoTBFdheWYxDDAKBgNVBAsTA0RldjEXMBUGA1UEAxMOSm9lIFRoZSBUZXN0ZXIxHDAaBgkqhkiG9w0BCQEWDWZyZWVrQHdheWYuZGswHhcNMTAxMTI0MTUwMTMwWhcNMzgwNDEwMTUwMTMwWjCBiDELMAkGA1UEBhMCREsxEDAOBgNVBAgTB0Rlbm1hcmsxEzARBgNVBAcTCkNvcGVuaGFnZW4xDTALBgNVBAoTBFdheWYxDDAKBgNVBAsTA0RldjEXMBUGA1UEAxMOSm9lIFRoZSBUZXN0ZXIxHDAaBgkqhkiG9w0BCQEWDWZyZWVrQHdheWYuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBALJo9CPaz2ptC8DYXh3GX22z+GsXTSSsaDvBSehf6jLFjzRMWPHqbBnDWyvZiglwNQuhkDdJ2JyzIVy0as+Npns/ZLljyn4eLDvymGmznXP9d8BJkIJds6rLTDxQ9ys/S0HCGKDTsQrS0+OWhszDvA5QUaJD2nkhYHimp7E9BjVRAgMBAAEwDQYJKoZIhvcNAQEFBQADgYEAFwMpg+s8AdL7HSh7uGVI5cHjBeLvRHFityZiP1CLitNa/oED5ojC2vD+F9kQ3qRHmq9i4/pqBc8Xmlgway0XzvDG3glsAp9HnVCdwM7J5QapoAsNYqwPKl8sTeuaa+J78MBfTxKpqINd3ZXUNsr1BRtDJCXVA/u37835YVJsN/A=',
                                                ),
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                        'md:SPSSODescriptor' => array(
                            array(
                                '_AuthnRequestsSigned' => 'true',
                                '_WantAssertionsSigned' => 'false',
                                'md:Extensions' => array(
                                    'mdattr:EntityAttributes' => array(
                                        'saml:Attribute' => array(
                                            array(
                                                '_Name' => 'corto:privatekey',
                                                'saml:AttributeValue' => array(
                                                    array('_use' => 'signing', '__v' => 'MIICXAIBAAKBgQCyaPQj2s9qbQvA2F4dxl9ts/hrF00krGg7wUnoX+oyxY80TFjx6mwZw1sr2YoJcDULoZA3SdicsyFctGrPjaZ7P2S5Y8p+Hiw78phps51z/XfASZCCXbOqy0w8UPcrP0tBwhig07EK0tPjlobMw7wOUFGiQ9p5IWB4pqexPQY1UQIDAQABAoGAG596ZW7EfILjtfkKIWwMbGzYAqS58fqrrMzRh6QKG9BQytUjVFlqYVbI7/IfmDSCUgmyzYymeCSX/sWEYBxbcSlZCTPvQ1Vq1SJgcg8aPRq+06z+KuByC70t3IFlFOH+KA1jzv397gMWMv1c3rHl86HTeoPzRJT7gHC4oFi/LG0CQQDlQvnARTSJc/I4f7HAul2Xbs8qvxJnpFt7zL5/LMTCZI5rNuL9gISoZnmBJJYTX4UrWDNTpbhunYU8nO+uWGCPAkEAxze1krTP9Zh1zAUUTH5RLs9iM6/CftQxe+lPd5ToVyHWJE0ICmP9zUavjOXIN2WN6xiOt1hWbUdEV/ntMb88HwJAI2tWhILsm/PCz0HDJ4BjZzriXLtKT6LP02+NWr6C43l/m0bOiNWrKQ0z5mTNns6aF1k4DMtElCpX5EZmrSvQNwJAbNLpxPIwh6B4+LHtnLuD7WYr5sAkJtQTE/UnC9Oz96TsLXhG5CYrBm+OhhEfheNb2wjXLSB8VcWQd952y64DUQJBAIHqOBy8/oy1A1Era/mReLAwsg7kW29/jXhqgHH9br0a0tx8Pmu0WDOKdoepGFOUBR2AX9Xr+dbfeUwLmKi7a1s='),
                                                    array('_use' => 'encryption', '__v' => 'MIICXAIBAAKBgQCyaPQj2s9qbQvA2F4dxl9ts/hrF00krGg7wUnoX+oyxY80TFjx6mwZw1sr2YoJcDULoZA3SdicsyFctGrPjaZ7P2S5Y8p+Hiw78phps51z/XfASZCCXbOqy0w8UPcrP0tBwhig07EK0tPjlobMw7wOUFGiQ9p5IWB4pqexPQY1UQIDAQABAoGAG596ZW7EfILjtfkKIWwMbGzYAqS58fqrrMzRh6QKG9BQytUjVFlqYVbI7/IfmDSCUgmyzYymeCSX/sWEYBxbcSlZCTPvQ1Vq1SJgcg8aPRq+06z+KuByC70t3IFlFOH+KA1jzv397gMWMv1c3rHl86HTeoPzRJT7gHC4oFi/LG0CQQDlQvnARTSJc/I4f7HAul2Xbs8qvxJnpFt7zL5/LMTCZI5rNuL9gISoZnmBJJYTX4UrWDNTpbhunYU8nO+uWGCPAkEAxze1krTP9Zh1zAUUTH5RLs9iM6/CftQxe+lPd5ToVyHWJE0ICmP9zUavjOXIN2WN6xiOt1hWbUdEV/ntMb88HwJAI2tWhILsm/PCz0HDJ4BjZzriXLtKT6LP02+NWr6C43l/m0bOiNWrKQ0z5mTNns6aF1k4DMtElCpX5EZmrSvQNwJAbNLpxPIwh6B4+LHtnLuD7WYr5sAkJtQTE/UnC9Oz96TsLXhG5CYrBm+OhhEfheNb2wjXLSB8VcWQd952y64DUQJBAIHqOBy8/oy1A1Era/mReLAwsg7kW29/jXhqgHH9br0a0tx8Pmu0WDOKdoepGFOUBR2AX9Xr+dbfeUwLmKi7a1s='),
                                                ),
                                            ),
                                        ),
                                    ),
                                ),
                                'md:KeyDescriptor' => array(
                                    array(
                                        '_use' => 'signing',
                                        'ds:KeyInfo' =>
                                        array(
                                            '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
                                            'ds:X509Data' =>
                                            array(
                                                'ds:X509Certificate' =>
                                                array(
                                                    '__v' => 'MIICiTCCAfICCQDzZZwa2zc89zANBgkqhkiG9w0BAQUFADCBiDELMAkGA1UEBhMCREsxEDAOBgNVBAgTB0Rlbm1hcmsxEzARBgNVBAcTCkNvcGVuaGFnZW4xDTALBgNVBAoTBFdheWYxDDAKBgNVBAsTA0RldjEXMBUGA1UEAxMOSm9lIFRoZSBUZXN0ZXIxHDAaBgkqhkiG9w0BCQEWDWZyZWVrQHdheWYuZGswHhcNMTAxMTI0MTUwMTMwWhcNMzgwNDEwMTUwMTMwWjCBiDELMAkGA1UEBhMCREsxEDAOBgNVBAgTB0Rlbm1hcmsxEzARBgNVBAcTCkNvcGVuaGFnZW4xDTALBgNVBAoTBFdheWYxDDAKBgNVBAsTA0RldjEXMBUGA1UEAxMOSm9lIFRoZSBUZXN0ZXIxHDAaBgkqhkiG9w0BCQEWDWZyZWVrQHdheWYuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBALJo9CPaz2ptC8DYXh3GX22z+GsXTSSsaDvBSehf6jLFjzRMWPHqbBnDWyvZiglwNQuhkDdJ2JyzIVy0as+Npns/ZLljyn4eLDvymGmznXP9d8BJkIJds6rLTDxQ9ys/S0HCGKDTsQrS0+OWhszDvA5QUaJD2nkhYHimp7E9BjVRAgMBAAEwDQYJKoZIhvcNAQEFBQADgYEAFwMpg+s8AdL7HSh7uGVI5cHjBeLvRHFityZiP1CLitNa/oED5ojC2vD+F9kQ3qRHmq9i4/pqBc8Xmlgway0XzvDG3glsAp9HnVCdwM7J5QapoAsNYqwPKl8sTeuaa+J78MBfTxKpqINd3ZXUNsr1BRtDJCXVA/u37835YVJsN/A=',
                                                ),
                                            ),
                                        ),
                                    ),
                                    array(
                                        '_use' => 'encryption',
                                        'ds:KeyInfo' =>
                                        array(
                                            '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
                                            'ds:X509Data' =>
                                            array(
                                                'ds:X509Certificate' =>
                                                array(
                                                    '__v' => 'MIICiTCCAfICCQDzZZwa2zc89zANBgkqhkiG9w0BAQUFADCBiDELMAkGA1UEBhMCREsxEDAOBgNVBAgTB0Rlbm1hcmsxEzARBgNVBAcTCkNvcGVuaGFnZW4xDTALBgNVBAoTBFdheWYxDDAKBgNVBAsTA0RldjEXMBUGA1UEAxMOSm9lIFRoZSBUZXN0ZXIxHDAaBgkqhkiG9w0BCQEWDWZyZWVrQHdheWYuZGswHhcNMTAxMTI0MTUwMTMwWhcNMzgwNDEwMTUwMTMwWjCBiDELMAkGA1UEBhMCREsxEDAOBgNVBAgTB0Rlbm1hcmsxEzARBgNVBAcTCkNvcGVuaGFnZW4xDTALBgNVBAoTBFdheWYxDDAKBgNVBAsTA0RldjEXMBUGA1UEAxMOSm9lIFRoZSBUZXN0ZXIxHDAaBgkqhkiG9w0BCQEWDWZyZWVrQHdheWYuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBALJo9CPaz2ptC8DYXh3GX22z+GsXTSSsaDvBSehf6jLFjzRMWPHqbBnDWyvZiglwNQuhkDdJ2JyzIVy0as+Npns/ZLljyn4eLDvymGmznXP9d8BJkIJds6rLTDxQ9ys/S0HCGKDTsQrS0+OWhszDvA5QUaJD2nkhYHimp7E9BjVRAgMBAAEwDQYJKoZIhvcNAQEFBQADgYEAFwMpg+s8AdL7HSh7uGVI5cHjBeLvRHFityZiP1CLitNa/oED5ojC2vD+F9kQ3qRHmq9i4/pqBc8Xmlgway0XzvDG3glsAp9HnVCdwM7J5QapoAsNYqwPKl8sTeuaa+J78MBfTxKpqINd3ZXUNsr1BRtDJCXVA/u37835YVJsN/A=',
                                                ),
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        ),
    );

    $janusconfig = array(
        'test' => array(
            'md' => 'https://config.wayf.dk/module.php/janus/exportentities.php?type[]=saml20-idp&state=testaccepted&external=corto-test',
            'wayf' => 'https://testidp.wayf.dk',
        ),
        'qa' => array(
            'md' => 'https://config.wayf.dk/module.php/janus/exportentities.php?type[]=saml20-idp&state=QAaccepted&external=corto-qa',
            'wayf' => 'https://betawayf.wayf.dk',
        ),
        'prod' => array(
            'md' => 'https://config.wayf.dk/module.php/janus/exportentities.php?type[]=saml20-idp&state=prodaccepted&external=corto-prod',
            'wayf' => 'https://wayf.wayf.dk',
        ),
    );


    $testqaprod = 'prod';

    preg_match("/^([^\.]+)/", basename(__FILE__), $dollar);

    $instance = $dollar[1];

    $metadatasources = array(
        'public:xml:' . dirname(__FILE__) . '/wayf.prod.md.xml',
        'private:php:' . dirname(__FILE__) . '/birk.meta.php',
        'remote:xml:https://betawayf.wayf.dk/saml2/idp/metadata.php',
    );

    $meta->prepareMetadata($metadatasources, '', $instance);

    $metadatafile = dirname(__FILE__) . '/' . $instance . '.optimized.metadata.php';

    if (1) {
        $md =  include $metadatafile;
        $lookuptablextra = array();
        foreach ($md as $id => $entity) {
            #unset($entity['original']);
            if (nvl3($entity, 'IDP', 'corto:IDPList', 0) != 'https://wayf.wayf.dk') {
                $entities[$id] = $entity;
                continue;
            } else {
                if (1) {
                    $entity['IDP']['corto:IDPList'][0] = 'https://betawayf.wayf.dk';
                    #$entity['IDP']['SingleSignOnService'][0]['Binding'] = 'JSON-Redirect';
                    $entities[$id] = $entity;
                    #$md['lookuptable']['testing'][$entity['IDP']['SingleSignOnService'][0]['Location']]['Binding'] = 'JSON-Redirect';
                    continue;
                };


                $newid = preg_replace("/^(_HOSTED_)/", '$1/proxy', $id);


                $newentity = $entity;
                # $newentity['IDP']['corto:IDPList'] = array('_HOSTED_/wayfwayf.wayf.dk', $id);
                #$newentity['IDP']['SingleSignOnService'][0]['Binding'] = 'JSON-Redirect';
                $newentity['IDP']['corto:IDPList'] = array('_HOSTED_/betawayf.wayf.dk', $id);
                $newentity['entityID'] = $newid;
                $lookuptablextra[$newid] = true;
                $sso = nvl3($newentity['IDP'], 'SingleSignOnService', 0, 'Location');

                $asc = $sso . "/ACS";
                $entity['SP']['AssertionConsumerService'] =
                        array(
                            array(
                                'Location' => $asc,
                                'Binding' => 'JSON-Redirect',
                            ),
                            'default' => 0,
                        );

                $lookuptablextra[$asc] = array(
                    'EntityID' => $id,
                    'Service' => 'AssertionConsumerService',
                    'Binding' => 'JSON-Redirect',
                );


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
                #$entities[$id] = $entity;
            }
        }

        print "#: " . count($entities['md']);
        $export = array('md' => $entities['md'], 'lookuptable' => array_merge($md['lookuptable'], $lookuptablextra));
        if ($really) {
            file_put_contents($metadatafile . '.tmp', "return " . var_export($export, true) . ";");
            @rename($metadatafile . '.tmp', $metadatafile);
            print " metadata written to: ";
            system("ls -l $metadatafile");
        } else {
            print_r($export);
        }
    }
    # system("ls -l $metadatafile");
}
