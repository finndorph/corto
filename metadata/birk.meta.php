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
                            '_AuthnRequestsSigned' => 'false',
                            '_WantResponsesSigned' => 'true',
                            '_WantAssertionsSigned' => 'false',

                            '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
                            'md:AssertionConsumerService' => array(
                                array(
                                    '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
                                    '_Location' => 'https://www.google.com/a/g.wayf.dk/acs',
                                    '_index' => 1,
                                ),
                                array(
                                    '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
                                    '_Location' => 'https://www.google.com/a/email.ruc.dk/acs',
                                    '_index' => 2,
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
                                        array(
                                            '_Name' => 'corto:responseOutputFilter',
                                            'saml:AttributeValue' => array(
                                                array('__v' => 'GoogleFilter::google'),
                                            ),
                                        ),
                                    )
                                ),
                            ),
                        ),
                    ),
                ),
                array(
                    '_entityID' => '_HOSTED_/google.com-proxy',
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
                    '_entityID' => 'uri:WindowsLiveID',
                    'md:SPSSODescriptor' => array(
                        array(
                            '_AuthnRequestsSigned' => 'false',
                            '_WantResponsesSigned' => 'false',
                            '_WantAssertionsSigned' => 'true',

                            '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
                            'md:AssertionConsumerService' => array(
                                array(
                                    '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
                                    '_Location' => 'https://login.live.com/login.srf',
                                    '_index' => 0,
                                    '_isDefault' => 'true',
                                ),
                            ),
                            'md:Extensions' => array(
                                'mdattr:EntityAttributes' => array(
                                    'saml:Attribute' => array(
                                        array(
                                            '_Name' => 'corto:proxySP',
                                            'saml:AttributeValue' => array(
                                                array('__v' => '_HOSTED_/uri:WindowsLiveID-proxy'),
                                            ),
                                        ),
                                        array(
                                            '_Name' => 'corto:responseOutputFilter',
                                            'saml:AttributeValue' => array(
                                                array('__v' => 'LiveAtEduFilter::liveatedu'),
                                            ),
                                        ),
                                    )
                                ),
                            ),
                        ),
                    ),
                ),
                array(
                    '_entityID' => '_HOSTED_/uri:WindowsLiveID-proxy',
                    'md:SPSSODescriptor' => array(
                        array(
                            '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
                            'md:AssertionConsumerService' => array(
                                array(
                                    '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
                                    '_Location' => '_HOSTED_/login.live.com/login.srf',
                                    '_index' => 1,
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