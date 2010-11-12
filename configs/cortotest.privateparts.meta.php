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
            'md:EntityDescriptor' => array(
                array(
                    '_entityID' => '_HOSTED_',

                    'md:Extensions' => array(
                        'saml:Attribute' => array(
                            array(
                                '_Name' => 'corto:sharedkey',
                                'saml:AttributeValue' => array(
                                    array('__v' => 'abrakadabra'),
                                ),
                            ),
                        ),
                    ),
                    'md:SPSSODescriptor' => array(
                        array(
                            '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
                            'md:AssertionConsumerService' => array(
                                array(
                                    '_Binding' => 'JSON-Redirect',
                                    '_Location' => '_HOSTED_',
                                    '_index' => 1,
                                ),
                            ),
                            'md:Extensions' => array(
                                'saml:Attribute' => array(
                                    array(
                                        '_Name' => 'corto:spfilter',
                                        'saml:AttributeValue' => array(
                                            array('__v' => 'spfilter'),
                                        ),
                                    ),
                                    array(
                                        '_Name' => 'corto:allowedIDPs',
                                        'saml:AttributeValue' => array(
                                            array('__v' => 'idp1'),
                                            array('__v' => 'idp2'),
                                        ),
                                    ),
                                    array(
                                        '_Name' => 'corto:deniedIDPs',
                                        'saml:AttributeValue' => array(
                                            array('__v' => 'idp3'),
                                            array('__v' => 'idp4'),
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
