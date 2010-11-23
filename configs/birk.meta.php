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
                    '_entityID' => 'google.com',
                    'md:SPSSODescriptor' => array(
                        array(
                            '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
                            'md:AssertionConsumerService' => array(
                                array(
                                    '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
                                    '_Location' => 'https://www.google.com/a/g.wayf.dk/acs',
                                    '_index' => 1,
                                ),
                            ),
                            'md:Extensions' => array(
                                'mdattr:EntityAttributes' => array(
                                    'saml:Attribute' => array(
                                        array(
                                            '_Name' => 'corto:proxySP',
                                            'saml:AttributeValue' => array(
                                                array('__v' => '_HOSTED_/google.com-proxy'),
                                            ),
                                        ),
                                    )
                                ),
                            ),
                        ),
                    ),
                ),
                array(
                    '_entityID' => '_HOSTED_ / google . com - proxy',
                    'md:SPSSODescriptor' => array(
                        array(
                            '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
                            'md:AssertionConsumerService' => array(
                                array(
                                    '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
                                    '_Location' => '_HOSTED_/www.google.com/a/g.wayf.dk/acs',
                                    '_index' => 1,
                                ),
                            ),
                        ),
                    ),
                ),
                array(
                    '_entityID' => '_HOSTED_/ude@evil',
                    'md:Extensions' => array(
                        'mdattr:EntityAttributes' => array(
                            'saml:Attribute' => array(
                                array(
                                    '_Name' => 'corto:dummy',
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
                                    '_Location' => '_COHOSTED_/birk.php/ude@evil-ACS',
                                    '_index' => 1,
                                ),
                            ),
                            'md:SingleLogoutService' => array(
                                array(
                                    '_Binding' => 'JSON-Redirect',
                                    '_Location' => '_COHOSTED_/birk.php/ude@evil/SLO',
                                    '_index' => 1,
                                ),
                            ),
                            'md:Extensions' => array(
                                'mdattr:EntityAttributes' => array(
                                    'saml:Attribute' => array(
                                        array(
                                            '_Name' => 'corto:proxySP',
                                            'saml:AttributeValue' => array(
                                                array('__v' => '_HOSTED_/ude@evil-proxy'),
                                            ),
                                        ),
                                    )
                                ),
                            ),
                        ),
                    ),
                ),
                array(
                    '_entityID' => '_HOSTED_/ude@evil-proxy',
                    'md:Organization' =>
                    array(
                        'md:OrganizationName' =>
                        array(
                            array(
                                '_xml:lang' => 'en',
                                '__v' => 'ude@evil',
                            ),
                            array(
                                '_xml:lang' => 'da',
                                '__v' => 'ude@evil',
                            ),
                        ),
                        'md:OrganizationDisplayName' =>
                        array(
                            array(
                                '_xml:lang' => 'en',
                                '__v' => 'Wayf - ude@evil',
                            ),
                            array(
                                '_xml:lang' => 'da',
                                '__v' => 'Wayf - ude@evil',
                            ),
                        ),
                        'md:OrganizationURL' =>
                        array(
                            array(
                                '_xml:lang' => 'en',
                                '__v' => 'wayf.dk',
                            ),
                            array(
                                '_xml:lang' => 'da',
                                '__v' => 'wayf.dk',
                            ),
                        ),
                    ),
                    'md:SPSSODescriptor' => array(
                        array(
                            '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
                            'md:AssertionConsumerService' => array(
                                array(
                                    '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
                                    '_Location' => '_HOSTED_/ude@evil-proxy/ACS',
                                    '_index' => 1,
                                ),
                            ),
                            'md:SingleLogoutService' => array(
                                array(
                                    '_Binding' => 'JSON-Redirect',
                                    '_Location' => '_HOSTED_/ude@evil-proxy/SLO',
                                    '_index' => 1,
                                ),
                            ),
                        ),
                    ),
                ),
                array(
                    '_entityID' => '_HOSTED_/moc.elgoog',
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
                                    '_Location' => '_COHOSTED_/birk.php/moc.elgoog-ACS',
                                    '_index' => 1,
                                ),
                            ),
                            'md:SingleLogoutService' => array(
                                array(
                                    '_Binding' => 'JSON-Redirect',
                                    '_Location' => '_COHOSTED_/birk.php/moc.elgoog/SLO',
                                    '_index' => 1,
                                ),
                            ),
                            'md:Extensions' => array(
                                'mdattr:EntityAttributes' => array(
                                    'saml:Attribute' => array(
                                        array(
                                            '_Name' => 'corto:proxySP',
                                            'saml:AttributeValue' => array(
                                                array('__v' => '_HOSTED_/moc.elgoog-proxy'),
                                            ),
                                        ),
                                    )
                                ),
                            ),
                        ),
                    ),
                ),
                array(
                    '_entityID' => '_HOSTED_/moc.elgoog-proxy',
                    'md:SPSSODescriptor' => array(
                        array(
                            '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
                            'md:AssertionConsumerService' => array(
                                array(
                                    '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
                                    '_Location' => '_HOSTED_/moc.elgoog-proxy/ACS',
                                    '_index' => 1,
                                ),
                            ),
                            'md:SingleLogoutService' => array(
                                array(
                                    '_Binding' => 'JSON-Redirect',
                                    '_Location' => '_HOSTED_/moc.elgoog-proxy/SLO',
                                    '_index' => 1,
                                ),
                            ),
                        ),
                    ),
                ),
/*                array(
                    '_entityID' => '_HOSTED_/wayf.wayf.dk',
                    'md:IDPSSODescriptor' => array(
                        array(
                            '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
                            'md:SingleSignOnService' => array(
                                array(
                                    '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                                    '_Location' => '_HOSTED_/wayf.wayf.dk/SSO',
                                ),
                            ),
                            'md:SingleLogoutService' => array(
                                array(
                                    '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
                                    '_Location' => '_HOSTED_/wayf.wayf.dk/SLO',
                                    '_index' => 1,
                                ),
                            ),
                        ),
                    ),
                    'md:SPSSODescriptor' => array(
                        array(
                            '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
                            'md:AssertionConsumerService' => array(
                                array(
                                    '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
                                    '_Location' => '_HOSTED_/wayf.wayf.dk/ACS',
                                    '_index' => 1,
                                ),
                            ),
                            'md:SingleLogoutService' => array(
                                array(
                                    '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
                                    '_Location' => '_HOSTED_/wayf.wayf.dk/SLO',
                                    '_index' => 1,
                                ),
                            ),
                        ),
                    ),
                )*/
                array(
                    '_entityID' => '_COHOSTED_/null.php',
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