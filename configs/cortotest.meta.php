<?php

return array(
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
                    '_entityID' => '_HOSTED_',
                    'md:Extensions' => array(
                        'mdattr:EntityAttributes' => array(
                            'saml:Attribute' => array(
                                array(
                                    '_Name' => 'corto:sharedkey',
                                    'saml:AttributeValue' => array(
                                        array('__v' => 'abrakadabra'),
                                    ),
                                ),
                            )
                        ),
                    ),
                    'md:SPSSODescriptor' => array(
                        array(
                            '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
                            'md:AssertionConsumerService' => array(
                                array(
                                    '_Binding' => 'JSON-Redirect',
                                    '_Location' => '_COHOSTED_/demo.php/ACS',
                                    '_index' => 1,
                                ),
                            ),
                            'md:SingleLogoutService' => array(
                                array(
                                    '_Binding' => 'JSON-Redirect',
                                    '_Location' => '_COHOSTED_/demo.php/SLO',
                                    '_index' => 1,
                                ),
                            ),
                        ),
                    ),
                ),
                array(
                    '_entityID' => '_HOSTED_/corto',
                    'md:SPSSODescriptor' => array(
                        array(
                            '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
                            'md:AssertionConsumerService' =>
                            array(
                                 array(
                                    '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
                                    '_Location' => '_HOSTED_/corto/ASC',
                                    '_index' => 1,
                                    '_isDefault' => true,
                                ),
                            ),
                        ),
                    ),
                    'md:IDPSSODescriptor' => array(
                        array(
                            '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
                             'md:SingleSignOnService' => array(
                                array(
                                    '_Binding' => 'HTTP-Redirect',
                                    '_Location' => '_HOSTED_/corto/SSO',
                                ),
                            ),
                            'md:SingleLogoutService' => array(
                                array(
                                    '_Binding' => 'JSON-Redirect',
                                    '_Location' => '_HOSTED_/sp/Mads/SLO',
                                ),
                            ),
                        ),
                    ),
                ),
                array(
                    '_entityID' => '_HOSTED_/idpwayf',
                    'md:IDPSSODescriptor' => array(
                        array(
                            '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
                            'md:Extensions' => array(
                                'mdattr:EntityAttributes' => array(
                                    'saml:Attribute' => array(
                                        array(
                                            '_Name' => 'corto:ProxySP',
                                            'saml:AttributeValue' => array(
                                                array('__v' => '_HOSTED_/spwayf'),
                                            ),
                                        ),
                                        array(
                                            '_Name' => 'corto:responseOutputFilter',
                                            'saml:AttributeValue' => array(
                                                'DemoFilterClass::democonsent',
                                            ),
                                        ),
                                        array(
                                            '_Name' => 'corto:cachefilter',
                                            'saml:AttributeValue' => array(
                                                array('__v' => 'DemoFilterClass::democache'),
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                            'md:SingleSignOnService' => array(
                                array(
                                    '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                                    '_Location' => '_HOSTED_/idpwayf/Niels',
                                ),
                            ),
                            'md:SingleLogoutService' => array(
                                array(
                                    '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
                                    '_Location' => '_HOSTED_/idpwayf/SLO',
                                    '_index' => 1,
                                ),
                            ),
                        ),
                    ),
                ),
                array(
                    '_entityID' => '_HOSTED_/spwayf',
                    'md:SPSSODescriptor' => array(
                        array(
                            '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
                            'md:AssertionConsumerService' =>
                            array(
                                array(
                                    '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
                                    '_Location' => '_HOSTED_/spwayf/Hans',
                                    '_index' => 1,
                                ),
                            ),
                        ),
                    ),
                ),
                array(
                    '_entityID' => '_HOSTED_/idp2',
                    'md:SPSSODescriptor' => array(
                        array(
                            '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
                            'md:AssertionConsumerService' =>
                            array(
                                array(
                                    '_Binding' => 'JSON-Redirect',
                                    '_Location' => '_HOSTED_/idp2/Ivo',
                                    '_index' => 1,
                                ),
                            ),
                        ),
                    ),
                    'md:IDPSSODescriptor' => array(
                        array(
                            '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
                            'md:Extensions' => array(
                                'mdattr:EntityAttributes' => array(
                                    'saml:Attribute' => array(
                                        array(
                                            '_Name' => 'corto:IDPList',
                                            'saml:AttributeValue' => array(
                                                array('__v' => '_COHOSTED_/null.php'),
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                            'md:SingleSignOnService' => array(
                                array(
                                    '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                                    '_Location' => '_HOSTED_/idp2/Jacob',
                                    '_index' => 1,
                                ),
                            ),
                        ),
                    ),
                ),
                array(
                    '_entityID' => '_HOSTED_/idp',
                    'md:SPSSODescriptor' => array(
                        array(
                            '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
                            'md:AssertionConsumerService' =>
                            array(
                                array(
                                    '_Binding' => 'JSON-Redirect',
                                    '_Location' => '_HOSTED_/idp/Ivo',
                                    '_index' => 1,
                                ),
                            ),
                        ),
                    ),
                    'md:IDPSSODescriptor' => array(
                        array(
                            '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
                            'md:Extensions' => array(
                                'mdattr:EntityAttributes' => array(
                                    'saml:Attribute' => array(
                                        array(
                                            '_Name' => 'corto:IDPList',
                                            'saml:AttributeValue' => array(
                                                array('__v' => '_COHOSTED_/null.php'),
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                            'md:SingleSignOnService' => array(
                                array(
                                    '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                                    '_Location' => '_HOSTED_/idp/Jacob',
                                    '_index' => 1,
                                ),
                            ),
                        ),
                    ),
                ),
                array(
                    '_entityID' => '_COHOSTED_/null.php',
                    'md:Extensions' => array(
                        'mdattr:EntityAttributes' => array(
                            'saml:Attribute' => array(
                                array(
                                    '_Name' => 'corto:sharedkey',
                                    'saml:AttributeValue' => array(
                                        array('__v' => 'abrakadabra'),
                                    ),
                                ),
                            )
                        ),
                    ),
                    'md:IDPSSODescriptor' => array(
                        array(
                            '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
                            'md:SingleSignOnService' => array(
                                array(
                                    '_Binding' => 'JSON-Redirect',
                                    '_Location' => '_COHOSTED_/null.php',
                                ),
                            ),
                        ),
                    ),
                ),
            ),

        ),
    ),
);
?>