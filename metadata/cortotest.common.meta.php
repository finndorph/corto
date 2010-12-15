<?php
/**
 * Created by PhpStorm.
 * User: freek
 * Date: Nov 9, 2010
 * Time: 5:01:19 PM
 * To change this template use File | Settings | File Templates.
 */

return array(
    'md:EntitiesDescriptor' => array(
        array(
            'md:EntityDescriptor' => array(
                array(
                    '_entityID' => '_COMMON_',
                    'md:IDPSSODescriptor' => array(
                        array(
                            'md:Extensions' => array(
                                'mdattr:EntityAttributes' => array(
                                    'saml:Attribute' => array(
                                        array(
                                            '_Name' => 'corto:privatekey',
                                            'saml:AttributeValue' => array(
                                                array('_use' => 'signing', '__v' => 'privatekey'),
                                                array('_use' => 'encryption', '__v' => 'privatekey'),
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                            'md:KeyDescriptor' => array(
                                array(
                                    '_use' => 'signing',
                                    '__v' => '',
                                    'ds:KeyInfo' =>
                                    array(
                                        '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
                                        '__v' => '',
                                        'ds:X509Data' =>
                                        array(
                                            '__v' => '',
                                            'ds:X509Certificate' =>
                                            array(
                                                '__v' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
                                            ),
                                        ),
                                    ),
                                ),
                                array(
                                    '_use' => 'encryption',
                                    '__v' => '',
                                    'ds:KeyInfo' =>
                                    array(
                                        '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
                                        '__v' => '',
                                        'ds:X509Data' =>
                                        array(
                                            '__v' => '',
                                            'ds:X509Certificate' =>
                                            array(
                                                '__v' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
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
