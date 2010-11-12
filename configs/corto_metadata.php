return array (
  'federations' => 
  array (
    'testing' => 
    array (
      '_HOSTED_' => 
      array (
        'entityID' => '_HOSTED_',
        'federation' => 'testing',
        'original' => 
        array (
          '_entityID' => '_HOSTED_',
          'md:Extensions' => 
          array (
            'mdattr:EntityAttributes' => 
            array (
              'saml:Attribute' => 
              array (
                0 => 
                array (
                  '_Name' => 'corto:sharedkey',
                  'saml:AttributeValue' => 
                  array (
                    0 => 
                    array (
                      '__v' => 'abrakadabra',
                    ),
                  ),
                ),
              ),
            ),
          ),
          'md:SPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:AssertionConsumerService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'JSON-Redirect',
                  '_Location' => '_COHOSTED_/demo.php/ACS',
                  '_index' => 1,
                ),
              ),
              'md:SingleLogoutService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'JSON-Redirect',
                  '_Location' => '_COHOSTED_/demo.php/SLO',
                  '_index' => 1,
                ),
              ),
            ),
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
        'SP' => 
        array (
          'AssertionConsumerService' => 
          array (
            1 => 
            array (
              'Location' => '_COHOSTED_/demo.php/ACS',
              'Binding' => 'JSON-Redirect',
              'isDefault' => NULL,
            ),
            'default' => 1,
          ),
          'SingleLogoutService' => 
          array (
            1 => 
            array (
              'Location' => '_COHOSTED_/demo.php/SLO',
              'Binding' => 'JSON-Redirect',
              'isDefault' => NULL,
            ),
          ),
          'saveSLOInfo' => true,
        ),
      ),
      '_HOSTED_/sp' => 
      array (
        'entityID' => '_HOSTED_/sp',
        'federation' => 'testing',
        'original' => 
        array (
          '_entityID' => '_HOSTED_/sp',
          'md:Extensions' => 
          array (
            'mdattr:EntityAttributes' => 
            array (
              'saml:Attribute' => 
              array (
                0 => 
                array (
                  '_Name' => 'corto:sharedkey',
                  'saml:AttributeValue' => 
                  array (
                    0 => 
                    array (
                      '__v' => 'abrakadabra',
                    ),
                  ),
                ),
              ),
            ),
          ),
          'md:SPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:AssertionConsumerService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
                  '_Location' => '_HOSTED_/sp/Boy1',
                  '_index' => 3,
                ),
                1 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
                  '_Location' => '_HOSTED_/sp/Boy2',
                  '_index' => 4,
                ),
                2 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
                  '_Location' => '_HOSTED_/sp/David',
                  '_index' => 2,
                  '_isDefault' => true,
                ),
                3 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
                  '_Location' => '_HOSTED_/sp/Boy4',
                  '_index' => 1,
                ),
              ),
            ),
          ),
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:Extensions' => 
              array (
                'mdattr:EntityAttributes' => 
                array (
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => '_HOSTED_/idpwayf',
                        ),
                      ),
                    ),
                    1 => 
                    array (
                      '_Name' => 'corto:cacheResponse',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'true',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'JSON-Redirect',
                  '_Location' => '_HOSTED_/sp/Mads',
                ),
              ),
              'md:SingleLogoutService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'JSON-Redirect',
                  '_Location' => '_HOSTED_/sp/Mads/SLO',
                ),
              ),
            ),
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/sp/Mads',
              'Binding' => 'JSON-Redirect',
            ),
          ),
          'SingleLogoutService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/sp/Mads/SLO',
              'Binding' => 'JSON-Redirect',
            ),
          ),
          'saveSLOInfo' => true,
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/idpwayf',
          ),
          'corto:cacheResponse' => 
          array (
            0 => 
            array (
              '__v' => 'true',
            ),
          ),
        ),
        'SP' => 
        array (
          'AssertionConsumerService' => 
          array (
            1 => 
            array (
              'Location' => '_HOSTED_/sp/Boy4',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
              'isDefault' => NULL,
            ),
            2 => 
            array (
              'Location' => '_HOSTED_/sp/David',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
              'isDefault' => true,
            ),
            3 => 
            array (
              'Location' => '_HOSTED_/sp/Boy1',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
              'isDefault' => NULL,
            ),
            4 => 
            array (
              'Location' => '_HOSTED_/sp/Boy2',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
              'isDefault' => NULL,
            ),
            'default' => 2,
          ),
        ),
      ),
      '_HOSTED_/idpwayf' => 
      array (
        'entityID' => '_HOSTED_/idpwayf',
        'federation' => 'testing',
        'original' => 
        array (
          '_entityID' => '_HOSTED_/idpwayf',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:Extensions' => 
              array (
                'mdattr:EntityAttributes' => 
                array (
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => '_HOSTED_/idp',
                        ),
                      ),
                    ),
                    1 => 
                    array (
                      '_Name' => 'corto:ProxySP',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => '_HOSTED_/spwayf',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/idpwayf/Niels',
                ),
              ),
              'md:SingleLogoutService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
                  '_Location' => '_HOSTED_/idpwayf/SLO',
                  '_index' => 1,
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/idpwayf/Niels',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'SingleLogoutService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/idpwayf/SLO',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
            ),
          ),
          'saveSLOInfo' => true,
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/idp',
          ),
          'corto:ProxySP' => 
          array (
            0 => 
            array (
              '__v' => '_HOSTED_/spwayf',
            ),
          ),
        ),
      ),
      '_HOSTED_/spwayf' => 
      array (
        'entityID' => '_HOSTED_/spwayf',
        'federation' => 'testing',
        'original' => 
        array (
          '_entityID' => '_HOSTED_/spwayf',
          'md:SPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:AssertionConsumerService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
                  '_Location' => '_HOSTED_/spwayf/Hans',
                  '_index' => 1,
                ),
              ),
            ),
          ),
        ),
        'SP' => 
        array (
          'AssertionConsumerService' => 
          array (
            1 => 
            array (
              'Location' => '_HOSTED_/spwayf/Hans',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
              'isDefault' => NULL,
            ),
            'default' => 1,
          ),
        ),
      ),
      '_HOSTED_/idp' => 
      array (
        'entityID' => '_HOSTED_/idp',
        'federation' => 'testing',
        'original' => 
        array (
          '_entityID' => '_HOSTED_/idp',
          'md:Extensions' => 
          array (
            'mdattr:EntityAttributes' => 
            array (
              'saml:Attribute' => 
              array (
                0 => 
                array (
                  '_Name' => 'corto:sharedkey',
                  'saml:AttributeValue' => 
                  array (
                    0 => 
                    array (
                      '__v' => 'abrakadabra',
                    ),
                  ),
                ),
              ),
            ),
          ),
          'md:SPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:AssertionConsumerService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'JSON-Redirect',
                  '_Location' => '_HOSTED_/idp/Ivo',
                  '_index' => 1,
                ),
              ),
            ),
          ),
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:Extensions' => 
              array (
                'mdattr:EntityAttributes' => 
                array (
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => '_COHOSTED_/null.php',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/idp/Jacob',
                  '_index' => 1,
                ),
              ),
            ),
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/idp/Jacob',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'SP' => 
        array (
          'AssertionConsumerService' => 
          array (
            1 => 
            array (
              'Location' => '_HOSTED_/idp/Ivo',
              'Binding' => 'JSON-Redirect',
              'isDefault' => NULL,
            ),
            'default' => 1,
          ),
        ),
      ),
      '_COHOSTED_/null.php' => 
      array (
        'entityID' => '_COHOSTED_/null.php',
        'federation' => 'testing',
        'original' => 
        array (
          '_entityID' => '_COHOSTED_/null.php',
          'md:Extensions' => 
          array (
            'mdattr:EntityAttributes' => 
            array (
              'saml:Attribute' => 
              array (
                0 => 
                array (
                  '_Name' => 'corto:sharedkey',
                  'saml:AttributeValue' => 
                  array (
                    0 => 
                    array (
                      '__v' => 'abrakadabra',
                    ),
                  ),
                ),
              ),
            ),
          ),
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'JSON-Redirect',
                  '_Location' => '_COHOSTED_/null.php',
                ),
              ),
            ),
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_COHOSTED_/null.php',
              'Binding' => 'JSON-Redirect',
            ),
          ),
        ),
      ),
      '_HOSTED_/wayf.au.dk' => 
      array (
        'entityID' => '_HOSTED_/wayf.au.dk',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.au.dk',
          '_validUntil' => '2010-11-16T14:24:02Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.au.dk/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.au.dk',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.au.dk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.au.dk',
          ),
        ),
      ),
      '_HOSTED_/https:/betahosted.wayf.dk/dtu/hostedidp' => 
      array (
        'entityID' => '_HOSTED_/https:/betahosted.wayf.dk/dtu/hostedidp',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/https:/betahosted.wayf.dk/dtu/hostedidp',
          '_validUntil' => '2010-11-16T14:24:02Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/betahosted.wayf.dk/dtu/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https:/betahosted.wayf.dk/dtu/hostedidp',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/betahosted.wayf.dk/dtu/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https:/betahosted.wayf.dk/dtu/hostedidp',
          ),
        ),
      ),
      '_HOSTED_/wayf.kb.dk/stafflogin' => 
      array (
        'entityID' => '_HOSTED_/wayf.kb.dk/stafflogin',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.kb.dk/stafflogin',
          '_validUntil' => '2010-11-16T14:24:02Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.kb.dk/stafflogin/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.kb.dk/stafflogin',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.kb.dk/stafflogin/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.kb.dk/stafflogin',
          ),
        ),
      ),
      '_HOSTED_/wayf.kb.dk/login' => 
      array (
        'entityID' => '_HOSTED_/wayf.kb.dk/login',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.kb.dk/login',
          '_validUntil' => '2010-11-16T14:24:02Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.kb.dk/login/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.kb.dk/login',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.kb.dk/login/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.kb.dk/login',
          ),
        ),
      ),
      '_HOSTED_/wayf.hi.is/simplesaml/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/wayf.hi.is/simplesaml/saml2/idp/metadata.php',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.hi.is/simplesaml/saml2/idp/metadata.php',
          '_validUntil' => '2010-11-16T14:24:02Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.hi.is/simplesaml/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.hi.is/simplesaml/saml2/idp/metadata.php',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.hi.is/simplesaml/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.hi.is/simplesaml/saml2/idp/metadata.php',
          ),
        ),
      ),
      '_HOSTED_/betahosted.wayf.dk/ku/hostedidp' => 
      array (
        'entityID' => '_HOSTED_/betahosted.wayf.dk/ku/hostedidp',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/betahosted.wayf.dk/ku/hostedidp',
          '_validUntil' => '2010-11-16T14:24:02Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/betahosted.wayf.dk/ku/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://betahosted.wayf.dk/ku/hostedidp',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/betahosted.wayf.dk/ku/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://betahosted.wayf.dk/ku/hostedidp',
          ),
        ),
      ),
      '_HOSTED_/wayf.ruc.dk/idp' => 
      array (
        'entityID' => '_HOSTED_/wayf.ruc.dk/idp',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.ruc.dk/idp',
          '_validUntil' => '2010-11-16T14:24:02Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.ruc.dk/idp/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.ruc.dk/idp',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.ruc.dk/idp/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.ruc.dk/idp',
          ),
        ),
      ),
      '_HOSTED_/wayf.tietgen.dk/simplesaml/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/wayf.tietgen.dk/simplesaml/saml2/idp/metadata.php',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.tietgen.dk/simplesaml/saml2/idp/metadata.php',
          '_validUntil' => '2010-11-16T14:24:02Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.tietgen.dk/simplesaml/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.tietgen.dk/simplesaml/saml2/idp/metadata.php',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.tietgen.dk/simplesaml/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.tietgen.dk/simplesaml/saml2/idp/metadata.php',
          ),
        ),
      ),
      '_HOSTED_/secure.ucsyd.dk/simplesaml/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/secure.ucsyd.dk/simplesaml/saml2/idp/metadata.php',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/secure.ucsyd.dk/simplesaml/saml2/idp/metadata.php',
          '_validUntil' => '2010-11-16T14:24:02Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/secure.ucsyd.dk/simplesaml/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://secure.ucsyd.dk/simplesaml/saml2/idp/metadata.php',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/secure.ucsyd.dk/simplesaml/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://secure.ucsyd.dk/simplesaml/saml2/idp/metadata.php',
          ),
        ),
      ),
      '_HOSTED_/orphanage.wayf.dk' => 
      array (
        'entityID' => '_HOSTED_/orphanage.wayf.dk',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/orphanage.wayf.dk',
          '_validUntil' => '2010-11-16T14:24:02Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/orphanage.wayf.dk/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://orphanage.wayf.dk',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/orphanage.wayf.dk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://orphanage.wayf.dk',
          ),
        ),
      ),
      '_HOSTED_/sso.ucl.dk/simplesaml/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/sso.ucl.dk/simplesaml/saml2/idp/metadata.php',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/sso.ucl.dk/simplesaml/saml2/idp/metadata.php',
          '_validUntil' => '2010-11-16T14:24:02Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/sso.ucl.dk/simplesaml/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://sso.ucl.dk/simplesaml/saml2/idp/metadata.php',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/sso.ucl.dk/simplesaml/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://sso.ucl.dk/simplesaml/saml2/idp/metadata.php',
          ),
        ),
      ),
      '_HOSTED_/wayf.viauc.dk/simplesaml/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/wayf.viauc.dk/simplesaml/saml2/idp/metadata.php',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.viauc.dk/simplesaml/saml2/idp/metadata.php',
          '_validUntil' => '2010-11-16T14:24:02Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.viauc.dk/simplesaml/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.viauc.dk/simplesaml/saml2/idp/metadata.php',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.viauc.dk/simplesaml/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.viauc.dk/simplesaml/saml2/idp/metadata.php',
          ),
        ),
      ),
      '_HOSTED_/wayf.phmetropol.dk/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/wayf.phmetropol.dk/saml2/idp/metadata.php',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.phmetropol.dk/saml2/idp/metadata.php',
          '_validUntil' => '2010-11-16T14:24:02Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.phmetropol.dk/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.phmetropol.dk/saml2/idp/metadata.php',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.phmetropol.dk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.phmetropol.dk/saml2/idp/metadata.php',
          ),
        ),
      ),
      '_HOSTED_/wayf.ihk.dk/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/wayf.ihk.dk/saml2/idp/metadata.php',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.ihk.dk/saml2/idp/metadata.php',
          '_validUntil' => '2010-11-16T14:24:02Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.ihk.dk/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.ihk.dk/saml2/idp/metadata.php',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.ihk.dk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.ihk.dk/saml2/idp/metadata.php',
          ),
        ),
      ),
      '_HOSTED_/ovalo.cbs.dk/saml/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/ovalo.cbs.dk/saml/saml2/idp/metadata.php',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/ovalo.cbs.dk/saml/saml2/idp/metadata.php',
          '_validUntil' => '2010-11-16T14:24:02Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/ovalo.cbs.dk/saml/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://ovalo.cbs.dk/saml/saml2/idp/metadata.php',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/ovalo.cbs.dk/saml/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://ovalo.cbs.dk/saml/saml2/idp/metadata.php',
          ),
        ),
      ),
      '_HOSTED_/wayf.ucc.dk/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/wayf.ucc.dk/saml2/idp/metadata.php',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.ucc.dk/saml2/idp/metadata.php',
          '_validUntil' => '2010-11-16T14:24:02Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.ucc.dk/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.ucc.dk/saml2/idp/metadata.php',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.ucc.dk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.ucc.dk/saml2/idp/metadata.php',
          ),
        ),
      ),
      '_HOSTED_/sso.drlund-gym.dk/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/sso.drlund-gym.dk/saml2/idp/metadata.php',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/sso.drlund-gym.dk/saml2/idp/metadata.php',
          '_validUntil' => '2010-11-16T14:24:02Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/sso.drlund-gym.dk/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://sso.drlund-gym.dk/saml2/idp/metadata.php',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/sso.drlund-gym.dk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://sso.drlund-gym.dk/saml2/idp/metadata.php',
          ),
        ),
      ),
      '_HOSTED_/wayf.iha.dk/simplesaml/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/wayf.iha.dk/simplesaml/saml2/idp/metadata.php',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.iha.dk/simplesaml/saml2/idp/metadata.php',
          '_validUntil' => '2010-11-16T14:24:02Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.iha.dk/simplesaml/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.iha.dk/simplesaml/saml2/idp/metadata.php',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.iha.dk/simplesaml/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.iha.dk/simplesaml/saml2/idp/metadata.php',
          ),
        ),
      ),
      '_HOSTED_/ssoproxy2.emu.dk/simplesaml/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/ssoproxy2.emu.dk/simplesaml/saml2/idp/metadata.php',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/ssoproxy2.emu.dk/simplesaml/saml2/idp/metadata.php',
          '_validUntil' => '2010-11-16T14:24:02Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/ssoproxy2.emu.dk/simplesaml/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://ssoproxy2.emu.dk/simplesaml/saml2/idp/metadata.php',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/ssoproxy2.emu.dk/simplesaml/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://ssoproxy2.emu.dk/simplesaml/saml2/idp/metadata.php',
          ),
        ),
      ),
      '_HOSTED_/sso.sdu.dk/wayf' => 
      array (
        'entityID' => '_HOSTED_/sso.sdu.dk/wayf',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/sso.sdu.dk/wayf',
          '_validUntil' => '2010-11-16T14:24:02Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.sdu.dk/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://sso.sdu.dk/wayf',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.sdu.dk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://sso.sdu.dk/wayf',
          ),
        ),
      ),
      '_HOSTED_/wayf.akademiaarhus.dk/simplesaml-eaa/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/wayf.akademiaarhus.dk/simplesaml-eaa/saml2/idp/metadata.php',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.akademiaarhus.dk/simplesaml-eaa/saml2/idp/metadata.php',
          '_validUntil' => '2010-11-16T14:24:02Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.akademiaarhus.dk/simplesaml-eaa/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.akademiaarhus.dk/simplesaml-eaa/saml2/idp/metadata.php',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.akademiaarhus.dk/simplesaml-eaa/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.akademiaarhus.dk/simplesaml-eaa/saml2/idp/metadata.php',
          ),
        ),
      ),
      '_HOSTED_/wayf.itu.dk/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/wayf.itu.dk/saml2/idp/metadata.php',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.itu.dk/saml2/idp/metadata.php',
          '_validUntil' => '2010-11-16T14:24:02Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.itu.dk/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.itu.dk/saml2/idp/metadata.php',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itu.dk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.itu.dk/saml2/idp/metadata.php',
          ),
        ),
      ),
      '_HOSTED_/sso.ucn.dk/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/sso.ucn.dk/saml2/idp/metadata.php',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/sso.ucn.dk/saml2/idp/metadata.php',
          '_validUntil' => '2010-11-16T14:24:02Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/sso.ucn.dk/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://sso.ucn.dk/saml2/idp/metadata.php',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/sso.ucn.dk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://sso.ucn.dk/saml2/idp/metadata.php',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/frg/saml2/idp/metadata.php?unit=frg' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/frg/saml2/idp/metadata.php?unit=frg',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.itcfyn.dk/frg/saml2/idp/metadata.php?unit=frg',
          '_validUntil' => '2010-11-16T14:24:02Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.itcfyn.dk/frg/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.itcfyn.dk/frg/saml2/idp/metadata.php?unit=frg',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/frg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.itcfyn.dk/frg/saml2/idp/metadata.php?unit=frg',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/ags/saml2/idp/metadata.php?unit=ags' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/ags/saml2/idp/metadata.php?unit=ags',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.itcfyn.dk/ags/saml2/idp/metadata.php?unit=ags',
          '_validUntil' => '2010-11-16T14:24:02Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.itcfyn.dk/ags/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.itcfyn.dk/ags/saml2/idp/metadata.php?unit=ags',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/ags/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.itcfyn.dk/ags/saml2/idp/metadata.php?unit=ags',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/nordfyns/saml2/idp/metadata.php?unit=nordfyns' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/nordfyns/saml2/idp/metadata.php?unit=nordfyns',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.itcfyn.dk/nordfyns/saml2/idp/metadata.php?unit=nordfyns',
          '_validUntil' => '2010-11-16T14:24:02Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.itcfyn.dk/nordfyns/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.itcfyn.dk/nordfyns/saml2/idp/metadata.php?unit=nordfyns',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/nordfyns/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.itcfyn.dk/nordfyns/saml2/idp/metadata.php?unit=nordfyns',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/ringe/saml2/idp/metadata.php?unit=ringe' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/ringe/saml2/idp/metadata.php?unit=ringe',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.itcfyn.dk/ringe/saml2/idp/metadata.php?unit=ringe',
          '_validUntil' => '2010-11-16T14:24:02Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.itcfyn.dk/ringe/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.itcfyn.dk/ringe/saml2/idp/metadata.php?unit=ringe',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/ringe/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.itcfyn.dk/ringe/saml2/idp/metadata.php?unit=ringe',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/middelfart/saml2/idp/metadata.php?unit=middelfart' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/middelfart/saml2/idp/metadata.php?unit=middelfart',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.itcfyn.dk/middelfart/saml2/idp/metadata.php?unit=middelfart',
          '_validUntil' => '2010-11-16T14:24:02Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.itcfyn.dk/middelfart/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.itcfyn.dk/middelfart/saml2/idp/metadata.php?unit=middelfart',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/middelfart/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.itcfyn.dk/middelfart/saml2/idp/metadata.php?unit=middelfart',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/kg/saml2/idp/metadata.php?unit=kg' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/kg/saml2/idp/metadata.php?unit=kg',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.itcfyn.dk/kg/saml2/idp/metadata.php?unit=kg',
          '_validUntil' => '2010-11-16T14:24:02Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.itcfyn.dk/kg/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.itcfyn.dk/kg/saml2/idp/metadata.php?unit=kg',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/kg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.itcfyn.dk/kg/saml2/idp/metadata.php?unit=kg',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/maribo/saml2/idp/metadata.php?unit=maribo' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/maribo/saml2/idp/metadata.php?unit=maribo',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.itcfyn.dk/maribo/saml2/idp/metadata.php?unit=maribo',
          '_validUntil' => '2010-11-16T14:24:02Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.itcfyn.dk/maribo/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.itcfyn.dk/maribo/saml2/idp/metadata.php?unit=maribo',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/maribo/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.itcfyn.dk/maribo/saml2/idp/metadata.php?unit=maribo',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/mulernes/saml2/idp/metadata.php?unit=mulernes' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/mulernes/saml2/idp/metadata.php?unit=mulernes',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.itcfyn.dk/mulernes/saml2/idp/metadata.php?unit=mulernes',
          '_validUntil' => '2010-11-16T14:24:02Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.itcfyn.dk/mulernes/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.itcfyn.dk/mulernes/saml2/idp/metadata.php?unit=mulernes',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/mulernes/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.itcfyn.dk/mulernes/saml2/idp/metadata.php?unit=mulernes',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/nakskov/saml2/idp/metadata.php?unit=nakskov' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/nakskov/saml2/idp/metadata.php?unit=nakskov',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.itcfyn.dk/nakskov/saml2/idp/metadata.php?unit=nakskov',
          '_validUntil' => '2010-11-16T14:24:02Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.itcfyn.dk/nakskov/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.itcfyn.dk/nakskov/saml2/idp/metadata.php?unit=nakskov',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/nakskov/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.itcfyn.dk/nakskov/saml2/idp/metadata.php?unit=nakskov',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/norreg/saml2/idp/metadata.php?unit=norreg' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/norreg/saml2/idp/metadata.php?unit=norreg',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.itcfyn.dk/norreg/saml2/idp/metadata.php?unit=norreg',
          '_validUntil' => '2010-11-16T14:24:02Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.itcfyn.dk/norreg/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.itcfyn.dk/norreg/saml2/idp/metadata.php?unit=norreg',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/norreg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.itcfyn.dk/norreg/saml2/idp/metadata.php?unit=norreg',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/nyborg/saml2/idp/metadata.php?unit=nyborg' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/nyborg/saml2/idp/metadata.php?unit=nyborg',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.itcfyn.dk/nyborg/saml2/idp/metadata.php?unit=nyborg',
          '_validUntil' => '2010-11-16T14:24:02Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.itcfyn.dk/nyborg/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.itcfyn.dk/nyborg/saml2/idp/metadata.php?unit=nyborg',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/nyborg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.itcfyn.dk/nyborg/saml2/idp/metadata.php?unit=nyborg',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/ribek/saml2/idp/metadata.php?unit=ribek' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/ribek/saml2/idp/metadata.php?unit=ribek',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.itcfyn.dk/ribek/saml2/idp/metadata.php?unit=ribek',
          '_validUntil' => '2010-11-16T14:24:02Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.itcfyn.dk/ribek/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.itcfyn.dk/ribek/saml2/idp/metadata.php?unit=ribek',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/ribek/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.itcfyn.dk/ribek/saml2/idp/metadata.php?unit=ribek',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/sctknud/saml2/idp/metadata.php?unit=sctknud' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/sctknud/saml2/idp/metadata.php?unit=sctknud',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.itcfyn.dk/sctknud/saml2/idp/metadata.php?unit=sctknud',
          '_validUntil' => '2010-11-16T14:24:02Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.itcfyn.dk/sctknud/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.itcfyn.dk/sctknud/saml2/idp/metadata.php?unit=sctknud',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/sctknud/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.itcfyn.dk/sctknud/saml2/idp/metadata.php?unit=sctknud',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/svendborgg/saml2/idp/metadata.php?unit=svendborgg' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/svendborgg/saml2/idp/metadata.php?unit=svendborgg',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.itcfyn.dk/svendborgg/saml2/idp/metadata.php?unit=svendborgg',
          '_validUntil' => '2010-11-16T14:24:02Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.itcfyn.dk/svendborgg/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.itcfyn.dk/svendborgg/saml2/idp/metadata.php?unit=svendborgg',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/svendborgg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.itcfyn.dk/svendborgg/saml2/idp/metadata.php?unit=svendborgg',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/tornby/saml2/idp/metadata.php?unit=tornby' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/tornby/saml2/idp/metadata.php?unit=tornby',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.itcfyn.dk/tornby/saml2/idp/metadata.php?unit=tornby',
          '_validUntil' => '2010-11-16T14:24:02Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.itcfyn.dk/tornby/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.itcfyn.dk/tornby/saml2/idp/metadata.php?unit=tornby',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/tornby/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.itcfyn.dk/tornby/saml2/idp/metadata.php?unit=tornby',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/tornbjerg/saml2/idp/metadata.php?unit=tornbjerg' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/tornbjerg/saml2/idp/metadata.php?unit=tornbjerg',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.itcfyn.dk/tornbjerg/saml2/idp/metadata.php?unit=tornbjerg',
          '_validUntil' => '2010-11-16T14:24:02Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.itcfyn.dk/tornbjerg/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.itcfyn.dk/tornbjerg/saml2/idp/metadata.php?unit=tornbjerg',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/tornbjerg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.itcfyn.dk/tornbjerg/saml2/idp/metadata.php?unit=tornbjerg',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/vestfynsg/saml2/idp/metadata.php?unit=vestfynsg' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/vestfynsg/saml2/idp/metadata.php?unit=vestfynsg',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.itcfyn.dk/vestfynsg/saml2/idp/metadata.php?unit=vestfynsg',
          '_validUntil' => '2010-11-16T14:24:02Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.itcfyn.dk/vestfynsg/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.itcfyn.dk/vestfynsg/saml2/idp/metadata.php?unit=vestfynsg',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/vestfynsg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.itcfyn.dk/vestfynsg/saml2/idp/metadata.php?unit=vestfynsg',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/vucfyn/saml2/idp/metadata.php?unit=vucfyn' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/vucfyn/saml2/idp/metadata.php?unit=vucfyn',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.itcfyn.dk/vucfyn/saml2/idp/metadata.php?unit=vucfyn',
          '_validUntil' => '2010-11-16T14:24:02Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.itcfyn.dk/vucfyn/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.itcfyn.dk/vucfyn/saml2/idp/metadata.php?unit=vucfyn',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/vucfyn/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.itcfyn.dk/vucfyn/saml2/idp/metadata.php?unit=vucfyn',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/sosufyn/saml2/idp/metadata.php?unit=sosufyn' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/sosufyn/saml2/idp/metadata.php?unit=sosufyn',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.itcfyn.dk/sosufyn/saml2/idp/metadata.php?unit=sosufyn',
          '_validUntil' => '2010-11-16T14:24:02Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.itcfyn.dk/sosufyn/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.itcfyn.dk/sosufyn/saml2/idp/metadata.php?unit=sosufyn',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/sosufyn/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.itcfyn.dk/sosufyn/saml2/idp/metadata.php?unit=sosufyn',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/humanica/saml2/idp/metadata.php?unit=humanica' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/humanica/saml2/idp/metadata.php?unit=humanica',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.itcfyn.dk/humanica/saml2/idp/metadata.php?unit=humanica',
          '_validUntil' => '2010-11-16T14:24:02Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.itcfyn.dk/humanica/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.itcfyn.dk/humanica/saml2/idp/metadata.php?unit=humanica',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/humanica/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.itcfyn.dk/humanica/saml2/idp/metadata.php?unit=humanica',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/sosufh/saml2/idp/metadata.php?unit=sosufh' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/sosufh/saml2/idp/metadata.php?unit=sosufh',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.itcfyn.dk/sosufh/saml2/idp/metadata.php?unit=sosufh',
          '_validUntil' => '2010-11-16T14:24:02Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.itcfyn.dk/sosufh/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.itcfyn.dk/sosufh/saml2/idp/metadata.php?unit=sosufh',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/sosufh/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.itcfyn.dk/sosufh/saml2/idp/metadata.php?unit=sosufh',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/fagy/saml2/idp/metadata.php?unit=fagy' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/fagy/saml2/idp/metadata.php?unit=fagy',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.itcfyn.dk/fagy/saml2/idp/metadata.php?unit=fagy',
          '_validUntil' => '2010-11-16T14:24:02Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.itcfyn.dk/fagy/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.itcfyn.dk/fagy/saml2/idp/metadata.php?unit=fagy',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/fagy/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.itcfyn.dk/fagy/saml2/idp/metadata.php?unit=fagy',
          ),
        ),
      ),
      '_HOSTED_/idp.statsbiblioteket.dk/sb/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/idp.statsbiblioteket.dk/sb/saml2/idp/metadata.php',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/idp.statsbiblioteket.dk/sb/saml2/idp/metadata.php',
          '_validUntil' => '2010-11-16T14:24:02Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/idp.statsbiblioteket.dk/sb/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://idp.statsbiblioteket.dk/sb/saml2/idp/metadata.php',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/idp.statsbiblioteket.dk/sb/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://idp.statsbiblioteket.dk/sb/saml2/idp/metadata.php',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/bornholm-gym/saml2/idp/metadata.php?unit=bornholm-gym' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/bornholm-gym/saml2/idp/metadata.php?unit=bornholm-gym',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.itcfyn.dk/bornholm-gym/saml2/idp/metadata.php?unit=bornholm-gym',
          '_validUntil' => '2010-11-16T14:24:02Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.itcfyn.dk/bornholm-gym/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.itcfyn.dk/bornholm-gym/saml2/idp/metadata.php?unit=bornholm-gym',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/bornholm-gym/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.itcfyn.dk/bornholm-gym/saml2/idp/metadata.php?unit=bornholm-gym',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/vuc-bornholm/saml2/idp/metadata.php?unit=vuc-bornholm' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/vuc-bornholm/saml2/idp/metadata.php?unit=vuc-bornholm',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.itcfyn.dk/vuc-bornholm/saml2/idp/metadata.php?unit=vuc-bornholm',
          '_validUntil' => '2010-11-16T14:24:02Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.itcfyn.dk/vuc-bornholm/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.itcfyn.dk/vuc-bornholm/saml2/idp/metadata.php?unit=vuc-bornholm',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/vuc-bornholm/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.itcfyn.dk/vuc-bornholm/saml2/idp/metadata.php?unit=vuc-bornholm',
          ),
        ),
      ),
      '_HOSTED_/wayf.supportcenter.dk/og/saml2/idp/metadata.php?unit=og' => 
      array (
        'entityID' => '_HOSTED_/wayf.supportcenter.dk/og/saml2/idp/metadata.php?unit=og',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.supportcenter.dk/og/saml2/idp/metadata.php?unit=og',
          '_validUntil' => '2010-11-16T14:24:02Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.supportcenter.dk/og/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.supportcenter.dk/og/saml2/idp/metadata.php?unit=og',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.supportcenter.dk/og/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.supportcenter.dk/og/saml2/idp/metadata.php?unit=og',
          ),
        ),
      ),
      '_HOSTED_/wayf.supportcenter.dk/aa/saml2/idp/metadata.php?unit=aa' => 
      array (
        'entityID' => '_HOSTED_/wayf.supportcenter.dk/aa/saml2/idp/metadata.php?unit=aa',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.supportcenter.dk/aa/saml2/idp/metadata.php?unit=aa',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.supportcenter.dk/aa/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.supportcenter.dk/aa/saml2/idp/metadata.php?unit=aa',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.supportcenter.dk/aa/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.supportcenter.dk/aa/saml2/idp/metadata.php?unit=aa',
          ),
        ),
      ),
      '_HOSTED_/wayf.supportcenter.dk/aip/saml2/idp/metadata.php?unit=aip' => 
      array (
        'entityID' => '_HOSTED_/wayf.supportcenter.dk/aip/saml2/idp/metadata.php?unit=aip',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.supportcenter.dk/aip/saml2/idp/metadata.php?unit=aip',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.supportcenter.dk/aip/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.supportcenter.dk/aip/saml2/idp/metadata.php?unit=aip',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.supportcenter.dk/aip/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.supportcenter.dk/aip/saml2/idp/metadata.php?unit=aip',
          ),
        ),
      ),
      '_HOSTED_/wayf.supportcenter.dk/ak/saml2/idp/metadata.php?unit=ak' => 
      array (
        'entityID' => '_HOSTED_/wayf.supportcenter.dk/ak/saml2/idp/metadata.php?unit=ak',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.supportcenter.dk/ak/saml2/idp/metadata.php?unit=ak',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.supportcenter.dk/ak/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.supportcenter.dk/ak/saml2/idp/metadata.php?unit=ak',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.supportcenter.dk/ak/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.supportcenter.dk/ak/saml2/idp/metadata.php?unit=ak',
          ),
        ),
      ),
      '_HOSTED_/wayf.supportcenter.dk/akat/saml2/idp/metadata.php?unit=akat' => 
      array (
        'entityID' => '_HOSTED_/wayf.supportcenter.dk/akat/saml2/idp/metadata.php?unit=akat',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.supportcenter.dk/akat/saml2/idp/metadata.php?unit=akat',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.supportcenter.dk/akat/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.supportcenter.dk/akat/saml2/idp/metadata.php?unit=akat',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.supportcenter.dk/akat/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.supportcenter.dk/akat/saml2/idp/metadata.php?unit=akat',
          ),
        ),
      ),
      '_HOSTED_/wayf.supportcenter.dk/asg/saml2/idp/metadata.php?unit=asg' => 
      array (
        'entityID' => '_HOSTED_/wayf.supportcenter.dk/asg/saml2/idp/metadata.php?unit=asg',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.supportcenter.dk/asg/saml2/idp/metadata.php?unit=asg',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.supportcenter.dk/asg/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.supportcenter.dk/asg/saml2/idp/metadata.php?unit=asg',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.supportcenter.dk/asg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.supportcenter.dk/asg/saml2/idp/metadata.php?unit=asg',
          ),
        ),
      ),
      '_HOSTED_/wayf.supportcenter.dk/eg/saml2/idp/metadata.php?unit=eg' => 
      array (
        'entityID' => '_HOSTED_/wayf.supportcenter.dk/eg/saml2/idp/metadata.php?unit=eg',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.supportcenter.dk/eg/saml2/idp/metadata.php?unit=eg',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.supportcenter.dk/eg/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.supportcenter.dk/eg/saml2/idp/metadata.php?unit=eg',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.supportcenter.dk/eg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.supportcenter.dk/eg/saml2/idp/metadata.php?unit=eg',
          ),
        ),
      ),
      '_HOSTED_/wayf.supportcenter.dk/gg/saml2/idp/metadata.php?unit=gg' => 
      array (
        'entityID' => '_HOSTED_/wayf.supportcenter.dk/gg/saml2/idp/metadata.php?unit=gg',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.supportcenter.dk/gg/saml2/idp/metadata.php?unit=gg',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.supportcenter.dk/gg/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.supportcenter.dk/gg/saml2/idp/metadata.php?unit=gg',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.supportcenter.dk/gg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.supportcenter.dk/gg/saml2/idp/metadata.php?unit=gg',
          ),
        ),
      ),
      '_HOSTED_/wayf.supportcenter.dk/lg/saml2/idp/metadata.php?unit=lg' => 
      array (
        'entityID' => '_HOSTED_/wayf.supportcenter.dk/lg/saml2/idp/metadata.php?unit=lg',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.supportcenter.dk/lg/saml2/idp/metadata.php?unit=lg',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.supportcenter.dk/lg/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.supportcenter.dk/lg/saml2/idp/metadata.php?unit=lg',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.supportcenter.dk/lg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.supportcenter.dk/lg/saml2/idp/metadata.php?unit=lg',
          ),
        ),
      ),
      '_HOSTED_/wayf.supportcenter.dk/mg/saml2/idp/metadata.php?unit=mg' => 
      array (
        'entityID' => '_HOSTED_/wayf.supportcenter.dk/mg/saml2/idp/metadata.php?unit=mg',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.supportcenter.dk/mg/saml2/idp/metadata.php?unit=mg',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.supportcenter.dk/mg/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.supportcenter.dk/mg/saml2/idp/metadata.php?unit=mg',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.supportcenter.dk/mg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.supportcenter.dk/mg/saml2/idp/metadata.php?unit=mg',
          ),
        ),
      ),
      '_HOSTED_/wayf.supportcenter.dk/ra/saml2/idp/metadata.php?unit=ra' => 
      array (
        'entityID' => '_HOSTED_/wayf.supportcenter.dk/ra/saml2/idp/metadata.php?unit=ra',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.supportcenter.dk/ra/saml2/idp/metadata.php?unit=ra',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.supportcenter.dk/ra/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.supportcenter.dk/ra/saml2/idp/metadata.php?unit=ra',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.supportcenter.dk/ra/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.supportcenter.dk/ra/saml2/idp/metadata.php?unit=ra',
          ),
        ),
      ),
      '_HOSTED_/wayf.supportcenter.dk/rs/saml2/idp/metadata.php?unit=rs' => 
      array (
        'entityID' => '_HOSTED_/wayf.supportcenter.dk/rs/saml2/idp/metadata.php?unit=rs',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.supportcenter.dk/rs/saml2/idp/metadata.php?unit=rs',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.supportcenter.dk/rs/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.supportcenter.dk/rs/saml2/idp/metadata.php?unit=rs',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.supportcenter.dk/rs/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.supportcenter.dk/rs/saml2/idp/metadata.php?unit=rs',
          ),
        ),
      ),
      '_HOSTED_/wayf.supportcenter.dk/sg/saml2/idp/metadata.php?unit=sg' => 
      array (
        'entityID' => '_HOSTED_/wayf.supportcenter.dk/sg/saml2/idp/metadata.php?unit=sg',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.supportcenter.dk/sg/saml2/idp/metadata.php?unit=sg',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.supportcenter.dk/sg/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.supportcenter.dk/sg/saml2/idp/metadata.php?unit=sg',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.supportcenter.dk/sg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.supportcenter.dk/sg/saml2/idp/metadata.php?unit=sg',
          ),
        ),
      ),
      '_HOSTED_/wayf.supportcenter.dk/sgy/saml2/idp/metadata.php?unit=sgy' => 
      array (
        'entityID' => '_HOSTED_/wayf.supportcenter.dk/sgy/saml2/idp/metadata.php?unit=sgy',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.supportcenter.dk/sgy/saml2/idp/metadata.php?unit=sgy',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.supportcenter.dk/sgy/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.supportcenter.dk/sgy/saml2/idp/metadata.php?unit=sgy',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.supportcenter.dk/sgy/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.supportcenter.dk/sgy/saml2/idp/metadata.php?unit=sgy',
          ),
        ),
      ),
      '_HOSTED_/wayf.supportcenter.dk/sosur/saml2/idp/metadata.php?unit=sosur' => 
      array (
        'entityID' => '_HOSTED_/wayf.supportcenter.dk/sosur/saml2/idp/metadata.php?unit=sosur',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.supportcenter.dk/sosur/saml2/idp/metadata.php?unit=sosur',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.supportcenter.dk/sosur/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.supportcenter.dk/sosur/saml2/idp/metadata.php?unit=sosur',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.supportcenter.dk/sosur/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.supportcenter.dk/sosur/saml2/idp/metadata.php?unit=sosur',
          ),
        ),
      ),
      '_HOSTED_/wayf.supportcenter.dk/sska/saml2/idp/metadata.php?unit=sska' => 
      array (
        'entityID' => '_HOSTED_/wayf.supportcenter.dk/sska/saml2/idp/metadata.php?unit=sska',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.supportcenter.dk/sska/saml2/idp/metadata.php?unit=sska',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.supportcenter.dk/sska/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.supportcenter.dk/sska/saml2/idp/metadata.php?unit=sska',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.supportcenter.dk/sska/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.supportcenter.dk/sska/saml2/idp/metadata.php?unit=sska',
          ),
        ),
      ),
      '_HOSTED_/wayf.supportcenter.dk/sss/saml2/idp/metadata.php?unit=sss' => 
      array (
        'entityID' => '_HOSTED_/wayf.supportcenter.dk/sss/saml2/idp/metadata.php?unit=sss',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.supportcenter.dk/sss/saml2/idp/metadata.php?unit=sss',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.supportcenter.dk/sss/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.supportcenter.dk/sss/saml2/idp/metadata.php?unit=sss',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.supportcenter.dk/sss/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.supportcenter.dk/sss/saml2/idp/metadata.php?unit=sss',
          ),
        ),
      ),
      '_HOSTED_/wayf.supportcenter.dk/stv/saml2/idp/metadata.php?unit=stv' => 
      array (
        'entityID' => '_HOSTED_/wayf.supportcenter.dk/stv/saml2/idp/metadata.php?unit=stv',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.supportcenter.dk/stv/saml2/idp/metadata.php?unit=stv',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.supportcenter.dk/stv/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.supportcenter.dk/stv/saml2/idp/metadata.php?unit=stv',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.supportcenter.dk/stv/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.supportcenter.dk/stv/saml2/idp/metadata.php?unit=stv',
          ),
        ),
      ),
      '_HOSTED_/wayf.supportcenter.dk/udc/saml2/idp/metadata.php?unit=udc' => 
      array (
        'entityID' => '_HOSTED_/wayf.supportcenter.dk/udc/saml2/idp/metadata.php?unit=udc',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.supportcenter.dk/udc/saml2/idp/metadata.php?unit=udc',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.supportcenter.dk/udc/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.supportcenter.dk/udc/saml2/idp/metadata.php?unit=udc',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.supportcenter.dk/udc/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.supportcenter.dk/udc/saml2/idp/metadata.php?unit=udc',
          ),
        ),
      ),
      '_HOSTED_/wayf.supportcenter.dk/vd/saml2/idp/metadata.php?unit=vd' => 
      array (
        'entityID' => '_HOSTED_/wayf.supportcenter.dk/vd/saml2/idp/metadata.php?unit=vd',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.supportcenter.dk/vd/saml2/idp/metadata.php?unit=vd',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.supportcenter.dk/vd/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.supportcenter.dk/vd/saml2/idp/metadata.php?unit=vd',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.supportcenter.dk/vd/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.supportcenter.dk/vd/saml2/idp/metadata.php?unit=vd',
          ),
        ),
      ),
      '_HOSTED_/wayf.supportcenter.dk/vhg/saml2/idp/metadata.php?unit=vhg' => 
      array (
        'entityID' => '_HOSTED_/wayf.supportcenter.dk/vhg/saml2/idp/metadata.php?unit=vhg',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.supportcenter.dk/vhg/saml2/idp/metadata.php?unit=vhg',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.supportcenter.dk/vhg/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.supportcenter.dk/vhg/saml2/idp/metadata.php?unit=vhg',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.supportcenter.dk/vhg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.supportcenter.dk/vhg/saml2/idp/metadata.php?unit=vhg',
          ),
        ),
      ),
      '_HOSTED_/wayf.supportcenter.dk/via/saml2/idp/metadata.php?unit=via' => 
      array (
        'entityID' => '_HOSTED_/wayf.supportcenter.dk/via/saml2/idp/metadata.php?unit=via',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.supportcenter.dk/via/saml2/idp/metadata.php?unit=via',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.supportcenter.dk/via/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.supportcenter.dk/via/saml2/idp/metadata.php?unit=via',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.supportcenter.dk/via/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.supportcenter.dk/via/saml2/idp/metadata.php?unit=via',
          ),
        ),
      ),
      '_HOSTED_/wayf.supportcenter.dk/its/saml2/idp/metadata.php?unit=its' => 
      array (
        'entityID' => '_HOSTED_/wayf.supportcenter.dk/its/saml2/idp/metadata.php?unit=its',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.supportcenter.dk/its/saml2/idp/metadata.php?unit=its',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.supportcenter.dk/its/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.supportcenter.dk/its/saml2/idp/metadata.php?unit=its',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.supportcenter.dk/its/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.supportcenter.dk/its/saml2/idp/metadata.php?unit=its',
          ),
        ),
      ),
      '_HOSTED_/nemlogin.wayf.dk' => 
      array (
        'entityID' => '_HOSTED_/nemlogin.wayf.dk',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/nemlogin.wayf.dk',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/nemlogin.wayf.dk/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://nemlogin.wayf.dk',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/nemlogin.wayf.dk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://nemlogin.wayf.dk',
          ),
        ),
      ),
      '_HOSTED_/wayf.regionsjaelland.dk/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/wayf.regionsjaelland.dk/saml2/idp/metadata.php',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.regionsjaelland.dk/saml2/idp/metadata.php',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.regionsjaelland.dk/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.regionsjaelland.dk/saml2/idp/metadata.php',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.regionsjaelland.dk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.regionsjaelland.dk/saml2/idp/metadata.php',
          ),
        ),
      ),
      '_HOSTED_/wayf.ibc.dk/simplesaml/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/wayf.ibc.dk/simplesaml/saml2/idp/metadata.php',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.ibc.dk/simplesaml/saml2/idp/metadata.php',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.ibc.dk/simplesaml/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.ibc.dk/simplesaml/saml2/idp/metadata.php',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.ibc.dk/simplesaml/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.ibc.dk/simplesaml/saml2/idp/metadata.php',
          ),
        ),
      ),
      '_HOSTED_/simpelsaml.natmus.dk/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/simpelsaml.natmus.dk/saml2/idp/metadata.php',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/simpelsaml.natmus.dk/saml2/idp/metadata.php',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/simpelsaml.natmus.dk/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://simpelsaml.natmus.dk/saml2/idp/metadata.php',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/simpelsaml.natmus.dk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://simpelsaml.natmus.dk/saml2/idp/metadata.php',
          ),
        ),
      ),
      '_HOSTED_/wayf.rungsted-gym.dk/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/wayf.rungsted-gym.dk/saml2/idp/metadata.php',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.rungsted-gym.dk/saml2/idp/metadata.php',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.rungsted-gym.dk/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.rungsted-gym.dk/saml2/idp/metadata.php',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.rungsted-gym.dk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.rungsted-gym.dk/saml2/idp/metadata.php',
          ),
        ),
      ),
      '_HOSTED_/wayf.gymund.dk/ar/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/wayf.gymund.dk/ar/saml2/idp/metadata.php',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.gymund.dk/ar/saml2/idp/metadata.php',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.gymund.dk/ar/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.gymund.dk/ar/saml2/idp/metadata.php',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.gymund.dk/ar/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.gymund.dk/ar/saml2/idp/metadata.php',
          ),
        ),
      ),
      '_HOSTED_/wayf.gymund.dk/gg/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/wayf.gymund.dk/gg/saml2/idp/metadata.php',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.gymund.dk/gg/saml2/idp/metadata.php',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.gymund.dk/gg/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.gymund.dk/gg/saml2/idp/metadata.php',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.gymund.dk/gg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.gymund.dk/gg/saml2/idp/metadata.php',
          ),
        ),
      ),
      '_HOSTED_/wayf.gymund.dk/hg/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/wayf.gymund.dk/hg/saml2/idp/metadata.php',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.gymund.dk/hg/saml2/idp/metadata.php',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.gymund.dk/hg/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.gymund.dk/hg/saml2/idp/metadata.php',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.gymund.dk/hg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.gymund.dk/hg/saml2/idp/metadata.php',
          ),
        ),
      ),
      '_HOSTED_/wayf.gymund.dk/kg/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/wayf.gymund.dk/kg/saml2/idp/metadata.php',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.gymund.dk/kg/saml2/idp/metadata.php',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.gymund.dk/kg/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.gymund.dk/kg/saml2/idp/metadata.php',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.gymund.dk/kg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.gymund.dk/kg/saml2/idp/metadata.php',
          ),
        ),
      ),
      '_HOSTED_/wayf.gymund.dk/rk/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/wayf.gymund.dk/rk/saml2/idp/metadata.php',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.gymund.dk/rk/saml2/idp/metadata.php',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.gymund.dk/rk/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.gymund.dk/rk/saml2/idp/metadata.php',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.gymund.dk/rk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.gymund.dk/rk/saml2/idp/metadata.php',
          ),
        ),
      ),
      '_HOSTED_/wayf.gymund.dk/sg/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/wayf.gymund.dk/sg/saml2/idp/metadata.php',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.gymund.dk/sg/saml2/idp/metadata.php',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.gymund.dk/sg/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.gymund.dk/sg/saml2/idp/metadata.php',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.gymund.dk/sg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.gymund.dk/sg/saml2/idp/metadata.php',
          ),
        ),
      ),
      '_HOSTED_/sso.ucsj.dk:443/idp' => 
      array (
        'entityID' => '_HOSTED_/sso.ucsj.dk:443/idp',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/sso.ucsj.dk:443/idp',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/sso.ucsj.dk:443/idp/SSORedirect/metaAlias/idp',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://sso.ucsj.dk:443/idp',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/sso.ucsj.dk:443/idp/SSORedirect/metaAlias/idp',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://sso.ucsj.dk:443/idp',
          ),
        ),
      ),
      '_HOSTED_/wayf.cphwest.dk/sosuc/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/wayf.cphwest.dk/sosuc/saml2/idp/metadata.php',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.cphwest.dk/sosuc/saml2/idp/metadata.php',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.cphwest.dk/sosuc/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.cphwest.dk/sosuc/saml2/idp/metadata.php',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.cphwest.dk/sosuc/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.cphwest.dk/sosuc/saml2/idp/metadata.php',
          ),
        ),
      ),
      '_HOSTED_/wayf.cphwest.dk/kea/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/wayf.cphwest.dk/kea/saml2/idp/metadata.php',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.cphwest.dk/kea/saml2/idp/metadata.php',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.cphwest.dk/kea/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.cphwest.dk/kea/saml2/idp/metadata.php',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.cphwest.dk/kea/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.cphwest.dk/kea/saml2/idp/metadata.php',
          ),
        ),
      ),
      '_HOSTED_/wayf.cphwest.dk/cphwest/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/wayf.cphwest.dk/cphwest/saml2/idp/metadata.php',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.cphwest.dk/cphwest/saml2/idp/metadata.php',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.cphwest.dk/cphwest/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.cphwest.dk/cphwest/saml2/idp/metadata.php',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.cphwest.dk/cphwest/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.cphwest.dk/cphwest/saml2/idp/metadata.php',
          ),
        ),
      ),
      '_HOSTED_/wayf.minibib.dk/dab' => 
      array (
        'entityID' => '_HOSTED_/wayf.minibib.dk/dab',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.minibib.dk/dab',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.minibib.dk/dab/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.minibib.dk/dab',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.minibib.dk/dab/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.minibib.dk/dab',
          ),
        ),
      ),
      '_HOSTED_/wayf.minibib.dk/akf' => 
      array (
        'entityID' => '_HOSTED_/wayf.minibib.dk/akf',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.minibib.dk/akf',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.minibib.dk/akf/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.minibib.dk/akf',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.minibib.dk/akf/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.minibib.dk/akf',
          ),
        ),
      ),
      '_HOSTED_/wayf.minibib.dk/bst' => 
      array (
        'entityID' => '_HOSTED_/wayf.minibib.dk/bst',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.minibib.dk/bst',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.minibib.dk/bst/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.minibib.dk/bst',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.minibib.dk/bst/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.minibib.dk/bst',
          ),
        ),
      ),
      '_HOSTED_/wayf.minibib.dk/dmi' => 
      array (
        'entityID' => '_HOSTED_/wayf.minibib.dk/dmi',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.minibib.dk/dmi',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.minibib.dk/dmi/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.minibib.dk/dmi',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.minibib.dk/dmi/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.minibib.dk/dmi',
          ),
        ),
      ),
      '_HOSTED_/wayf.minibib.dk/ism' => 
      array (
        'entityID' => '_HOSTED_/wayf.minibib.dk/ism',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.minibib.dk/ism',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.minibib.dk/ism/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.minibib.dk/ism',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.minibib.dk/ism/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.minibib.dk/ism',
          ),
        ),
      ),
      '_HOSTED_/wayf.minibib.dk/ens' => 
      array (
        'entityID' => '_HOSTED_/wayf.minibib.dk/ens',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.minibib.dk/ens',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.minibib.dk/ens/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.minibib.dk/ens',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.minibib.dk/ens/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.minibib.dk/ens',
          ),
        ),
      ),
      '_HOSTED_/wayf.minibib.dk/fbo' => 
      array (
        'entityID' => '_HOSTED_/wayf.minibib.dk/fbo',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.minibib.dk/fbo',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.minibib.dk/fbo/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.minibib.dk/fbo',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.minibib.dk/fbo/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.minibib.dk/fbo',
          ),
        ),
      ),
      '_HOSTED_/wayf.minibib.dk/fob' => 
      array (
        'entityID' => '_HOSTED_/wayf.minibib.dk/fob',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.minibib.dk/fob',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.minibib.dk/fob/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.minibib.dk/fob',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.minibib.dk/fob/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.minibib.dk/fob',
          ),
        ),
      ),
      '_HOSTED_/wayf.minibib.dk/fsv' => 
      array (
        'entityID' => '_HOSTED_/wayf.minibib.dk/fsv',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.minibib.dk/fsv',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.minibib.dk/fsv/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.minibib.dk/fsv',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.minibib.dk/fsv/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.minibib.dk/fsv',
          ),
        ),
      ),
      '_HOSTED_/wayf.minibib.dk/ksb' => 
      array (
        'entityID' => '_HOSTED_/wayf.minibib.dk/ksb',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.minibib.dk/ksb',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.minibib.dk/ksb/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.minibib.dk/ksb',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.minibib.dk/ksb/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.minibib.dk/ksb',
          ),
        ),
      ),
      '_HOSTED_/wayf.minibib.dk/kul' => 
      array (
        'entityID' => '_HOSTED_/wayf.minibib.dk/kul',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.minibib.dk/kul',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.minibib.dk/kul/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.minibib.dk/kul',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.minibib.dk/kul/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.minibib.dk/kul',
          ),
        ),
      ),
      '_HOSTED_/wayf.minibib.dk/ami' => 
      array (
        'entityID' => '_HOSTED_/wayf.minibib.dk/ami',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.minibib.dk/ami',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.minibib.dk/ami/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.minibib.dk/ami',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.minibib.dk/ami/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.minibib.dk/ami',
          ),
        ),
      ),
      '_HOSTED_/wayf.minibib.dk/sfi' => 
      array (
        'entityID' => '_HOSTED_/wayf.minibib.dk/sfi',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.minibib.dk/sfi',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.minibib.dk/sfi/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.minibib.dk/sfi',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.minibib.dk/sfi/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.minibib.dk/sfi',
          ),
        ),
      ),
      '_HOSTED_/wayf.minibib.dk/ank' => 
      array (
        'entityID' => '_HOSTED_/wayf.minibib.dk/ank',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.minibib.dk/ank',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.minibib.dk/ank/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.minibib.dk/ank',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.minibib.dk/ank/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.minibib.dk/ank',
          ),
        ),
      ),
      '_HOSTED_/wayf.minibib.dk/vfc' => 
      array (
        'entityID' => '_HOSTED_/wayf.minibib.dk/vfc',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.minibib.dk/vfc',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.minibib.dk/vfc/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.minibib.dk/vfc',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.minibib.dk/vfc/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.minibib.dk/vfc',
          ),
        ),
      ),
      '_HOSTED_/wayf.minibib.dk/stm' => 
      array (
        'entityID' => '_HOSTED_/wayf.minibib.dk/stm',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.minibib.dk/stm',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.minibib.dk/stm/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.minibib.dk/stm',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.minibib.dk/stm/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.minibib.dk/stm',
          ),
        ),
      ),
      '_HOSTED_/wayf.minibib.dk/vej' => 
      array (
        'entityID' => '_HOSTED_/wayf.minibib.dk/vej',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.minibib.dk/vej',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.minibib.dk/vej/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.minibib.dk/vej',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.minibib.dk/vej/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.minibib.dk/vej',
          ),
        ),
      ),
      '_HOSTED_/auth.dsl.dk/simplesaml/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/auth.dsl.dk/simplesaml/saml2/idp/metadata.php',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/auth.dsl.dk/simplesaml/saml2/idp/metadata.php',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/auth.dsl.dk/simplesaml/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://auth.dsl.dk/simplesaml/saml2/idp/metadata.php',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/auth.dsl.dk/simplesaml/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://auth.dsl.dk/simplesaml/saml2/idp/metadata.php',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/sosusyd/saml2/idp/metadata.php?unit=sosusyd' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/sosusyd/saml2/idp/metadata.php?unit=sosusyd',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.itcfyn.dk/sosusyd/saml2/idp/metadata.php?unit=sosusyd',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.itcfyn.dk/sosusyd/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.itcfyn.dk/sosusyd/saml2/idp/metadata.php?unit=sosusyd',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/sosusyd/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.itcfyn.dk/sosusyd/saml2/idp/metadata.php?unit=sosusyd',
          ),
        ),
      ),
      '_HOSTED_/wayf.videndjurs.dk/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/wayf.videndjurs.dk/saml2/idp/metadata.php',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.videndjurs.dk/saml2/idp/metadata.php',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.videndjurs.dk/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.videndjurs.dk/saml2/idp/metadata.php',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.videndjurs.dk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.videndjurs.dk/saml2/idp/metadata.php',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/munkensdam/saml2/idp/metadata.php?unit=munkensdam' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/munkensdam/saml2/idp/metadata.php?unit=munkensdam',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.itcfyn.dk/munkensdam/saml2/idp/metadata.php?unit=munkensdam',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.itcfyn.dk/munkensdam/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.itcfyn.dk/munkensdam/saml2/idp/metadata.php?unit=munkensdam',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/munkensdam/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.itcfyn.dk/munkensdam/saml2/idp/metadata.php?unit=munkensdam',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/odensekatedralskole/saml2/idp/metadata.php?unit=odensekatedralskole' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/odensekatedralskole/saml2/idp/metadata.php?unit=odensekatedralskole',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.itcfyn.dk/odensekatedralskole/saml2/idp/metadata.php?unit=odensekatedralskole',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.itcfyn.dk/odensekatedralskole/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.itcfyn.dk/odensekatedralskole/saml2/idp/metadata.php?unit=odensekatedralskole',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/odensekatedralskole/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.itcfyn.dk/odensekatedralskole/saml2/idp/metadata.php?unit=odensekatedralskole',
          ),
        ),
      ),
      '_HOSTED_/www.studievej14.dk/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/www.studievej14.dk/saml2/idp/metadata.php',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/www.studievej14.dk/saml2/idp/metadata.php',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/www.studievej14.dk/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://www.studievej14.dk/saml2/idp/metadata.php',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/www.studievej14.dk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://www.studievej14.dk/saml2/idp/metadata.php',
          ),
        ),
      ),
      '_HOSTED_/wayf.cg-gym.dk' => 
      array (
        'entityID' => '_HOSTED_/wayf.cg-gym.dk',
        'federation' => 'testing',
        'original' => 
        array (
          '_xmlns:ds' => 'http://www.w3.org/2000/09/xmldsig#',
          '_entityID' => '_HOSTED_/wayf.cg-gym.dk',
          '_validUntil' => '2010-11-16T14:24:03Z',
          '_cacheDuration' => 'PT86400S',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:NameIDFormat' => 
              array (
                0 => 
                array (
                  '__v' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
                ),
              ),
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.cg-gym.dk/saml2/idp/SSOService.php',
                ),
              ),
              'md:Extensions' => 
              array (
                '_xmlns:saml' => 'urn:oasis:names:tc:SAML:2.0:assertion',
                '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                'mdattr:EntityAttributes' => 
                array (
                  '_xmlns:mdattr' => 'urn:oasis:names:tc:SAML:metadata:attribute',
                  'saml:Attribute' => 
                  array (
                    0 => 
                    array (
                      '_Name' => 'corto:IDPList',
                      'saml:AttributeValue' => 
                      array (
                        0 => 
                        array (
                          '__v' => 'https://wayf.wayf.dk',
                        ),
                        1 => 
                        array (
                          '__v' => 'https://wayf.cg-gym.dk',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'md:KeyDescriptor' => 
              array (
                0 => 
                array (
                  'ds:KeyInfo' => 
                  array (
                    'ds:X509Data' => 
                    array (
                      'ds:X509Certificate' => 
                      array (
                        '__v' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
            'X509Privatekey' => 'privatekey',
          ),
          'encryption' => 
          array (
            'X509Certificate' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
            'X509Privatekey' => 'privatekey',
          ),
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.cg-gym.dk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => 'https://wayf.wayf.dk',
            1 => 'https://wayf.cg-gym.dk',
          ),
        ),
      ),
    ),
  ),
  'lookuptable' => 
  array (
    'testing' => 
    array (
      '_COHOSTED_/demo.php/ACS' => 
      array (
        'EntityID' => '_HOSTED_',
        'Service' => 'AssertionConsumerService',
        'Binding' => 'JSON-Redirect',
      ),
      '_COHOSTED_/demo.php/SLO' => 
      array (
        'EntityID' => '_HOSTED_',
        'Service' => 'SingleLogoutService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_' => true,
      '_HOSTED_/sp/Boy4' => 
      array (
        'EntityID' => '_HOSTED_/sp',
        'Service' => 'AssertionConsumerService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      ),
      '_HOSTED_/sp/David' => 
      array (
        'EntityID' => '_HOSTED_/sp',
        'Service' => 'AssertionConsumerService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      ),
      '_HOSTED_/sp/Boy1' => 
      array (
        'EntityID' => '_HOSTED_/sp',
        'Service' => 'AssertionConsumerService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      ),
      '_HOSTED_/sp/Boy2' => 
      array (
        'EntityID' => '_HOSTED_/sp',
        'Service' => 'AssertionConsumerService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      ),
      '_HOSTED_/sp' => true,
      '_HOSTED_/sp/Mads' => 
      array (
        'EntityID' => '_HOSTED_/sp',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/sp/Mads/SLO' => 
      array (
        'EntityID' => '_HOSTED_/sp',
        'Service' => 'SingleLogoutService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/idpwayf' => true,
      '_HOSTED_/idpwayf/Niels' => 
      array (
        'EntityID' => '_HOSTED_/idpwayf',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/idpwayf/SLO' => 
      array (
        'EntityID' => '_HOSTED_/idpwayf',
        'Service' => 'SingleLogoutService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
      ),
      '_HOSTED_/spwayf/Hans' => 
      array (
        'EntityID' => '_HOSTED_/spwayf',
        'Service' => 'AssertionConsumerService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      ),
      '_HOSTED_/spwayf' => true,
      '_HOSTED_/idp/Ivo' => 
      array (
        'EntityID' => '_HOSTED_/idp',
        'Service' => 'AssertionConsumerService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/idp' => true,
      '_HOSTED_/idp/Jacob' => 
      array (
        'EntityID' => '_HOSTED_/idp',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_COHOSTED_/null.php' => true,
      '_HOSTED_/wayf.au.dk' => true,
      '_HOSTED_/wayf.au.dk/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.au.dk',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/https:/betahosted.wayf.dk/dtu/hostedidp' => true,
      '_HOSTED_/betahosted.wayf.dk/dtu/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/https:/betahosted.wayf.dk/dtu/hostedidp',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.kb.dk/stafflogin' => true,
      '_HOSTED_/wayf.kb.dk/stafflogin/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.kb.dk/stafflogin',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.kb.dk/login' => true,
      '_HOSTED_/wayf.kb.dk/login/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.kb.dk/login',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.hi.is/simplesaml/saml2/idp/metadata.php' => true,
      '_HOSTED_/wayf.hi.is/simplesaml/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.hi.is/simplesaml/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/betahosted.wayf.dk/ku/hostedidp' => true,
      '_HOSTED_/betahosted.wayf.dk/ku/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/betahosted.wayf.dk/ku/hostedidp',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.ruc.dk/idp' => true,
      '_HOSTED_/wayf.ruc.dk/idp/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.ruc.dk/idp',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.tietgen.dk/simplesaml/saml2/idp/metadata.php' => true,
      '_HOSTED_/wayf.tietgen.dk/simplesaml/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.tietgen.dk/simplesaml/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/secure.ucsyd.dk/simplesaml/saml2/idp/metadata.php' => true,
      '_HOSTED_/secure.ucsyd.dk/simplesaml/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/secure.ucsyd.dk/simplesaml/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/orphanage.wayf.dk' => true,
      '_HOSTED_/orphanage.wayf.dk/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/orphanage.wayf.dk',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/sso.ucl.dk/simplesaml/saml2/idp/metadata.php' => true,
      '_HOSTED_/sso.ucl.dk/simplesaml/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/sso.ucl.dk/simplesaml/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.viauc.dk/simplesaml/saml2/idp/metadata.php' => true,
      '_HOSTED_/wayf.viauc.dk/simplesaml/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.viauc.dk/simplesaml/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.phmetropol.dk/saml2/idp/metadata.php' => true,
      '_HOSTED_/wayf.phmetropol.dk/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.phmetropol.dk/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.ihk.dk/saml2/idp/metadata.php' => true,
      '_HOSTED_/wayf.ihk.dk/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.ihk.dk/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/ovalo.cbs.dk/saml/saml2/idp/metadata.php' => true,
      '_HOSTED_/ovalo.cbs.dk/saml/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/ovalo.cbs.dk/saml/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.ucc.dk/saml2/idp/metadata.php' => true,
      '_HOSTED_/wayf.ucc.dk/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.ucc.dk/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/sso.drlund-gym.dk/saml2/idp/metadata.php' => true,
      '_HOSTED_/sso.drlund-gym.dk/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/sso.drlund-gym.dk/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.iha.dk/simplesaml/saml2/idp/metadata.php' => true,
      '_HOSTED_/wayf.iha.dk/simplesaml/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.iha.dk/simplesaml/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/ssoproxy2.emu.dk/simplesaml/saml2/idp/metadata.php' => true,
      '_HOSTED_/ssoproxy2.emu.dk/simplesaml/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/ssoproxy2.emu.dk/simplesaml/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/sso.sdu.dk/wayf' => true,
      '_HOSTED_/wayf.sdu.dk/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/sso.sdu.dk/wayf',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.akademiaarhus.dk/simplesaml-eaa/saml2/idp/metadata.php' => true,
      '_HOSTED_/wayf.akademiaarhus.dk/simplesaml-eaa/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.akademiaarhus.dk/simplesaml-eaa/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.itu.dk/saml2/idp/metadata.php' => true,
      '_HOSTED_/wayf.itu.dk/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.itu.dk/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/sso.ucn.dk/saml2/idp/metadata.php' => true,
      '_HOSTED_/sso.ucn.dk/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/sso.ucn.dk/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.itcfyn.dk/frg/saml2/idp/metadata.php?unit=frg' => true,
      '_HOSTED_/wayf.itcfyn.dk/frg/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.itcfyn.dk/frg/saml2/idp/metadata.php?unit=frg',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.itcfyn.dk/ags/saml2/idp/metadata.php?unit=ags' => true,
      '_HOSTED_/wayf.itcfyn.dk/ags/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.itcfyn.dk/ags/saml2/idp/metadata.php?unit=ags',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.itcfyn.dk/nordfyns/saml2/idp/metadata.php?unit=nordfyns' => true,
      '_HOSTED_/wayf.itcfyn.dk/nordfyns/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.itcfyn.dk/nordfyns/saml2/idp/metadata.php?unit=nordfyns',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.itcfyn.dk/ringe/saml2/idp/metadata.php?unit=ringe' => true,
      '_HOSTED_/wayf.itcfyn.dk/ringe/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.itcfyn.dk/ringe/saml2/idp/metadata.php?unit=ringe',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.itcfyn.dk/middelfart/saml2/idp/metadata.php?unit=middelfart' => true,
      '_HOSTED_/wayf.itcfyn.dk/middelfart/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.itcfyn.dk/middelfart/saml2/idp/metadata.php?unit=middelfart',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.itcfyn.dk/kg/saml2/idp/metadata.php?unit=kg' => true,
      '_HOSTED_/wayf.itcfyn.dk/kg/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.itcfyn.dk/kg/saml2/idp/metadata.php?unit=kg',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.itcfyn.dk/maribo/saml2/idp/metadata.php?unit=maribo' => true,
      '_HOSTED_/wayf.itcfyn.dk/maribo/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.itcfyn.dk/maribo/saml2/idp/metadata.php?unit=maribo',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.itcfyn.dk/mulernes/saml2/idp/metadata.php?unit=mulernes' => true,
      '_HOSTED_/wayf.itcfyn.dk/mulernes/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.itcfyn.dk/mulernes/saml2/idp/metadata.php?unit=mulernes',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.itcfyn.dk/nakskov/saml2/idp/metadata.php?unit=nakskov' => true,
      '_HOSTED_/wayf.itcfyn.dk/nakskov/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.itcfyn.dk/nakskov/saml2/idp/metadata.php?unit=nakskov',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.itcfyn.dk/norreg/saml2/idp/metadata.php?unit=norreg' => true,
      '_HOSTED_/wayf.itcfyn.dk/norreg/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.itcfyn.dk/norreg/saml2/idp/metadata.php?unit=norreg',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.itcfyn.dk/nyborg/saml2/idp/metadata.php?unit=nyborg' => true,
      '_HOSTED_/wayf.itcfyn.dk/nyborg/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.itcfyn.dk/nyborg/saml2/idp/metadata.php?unit=nyborg',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.itcfyn.dk/ribek/saml2/idp/metadata.php?unit=ribek' => true,
      '_HOSTED_/wayf.itcfyn.dk/ribek/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.itcfyn.dk/ribek/saml2/idp/metadata.php?unit=ribek',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.itcfyn.dk/sctknud/saml2/idp/metadata.php?unit=sctknud' => true,
      '_HOSTED_/wayf.itcfyn.dk/sctknud/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.itcfyn.dk/sctknud/saml2/idp/metadata.php?unit=sctknud',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.itcfyn.dk/svendborgg/saml2/idp/metadata.php?unit=svendborgg' => true,
      '_HOSTED_/wayf.itcfyn.dk/svendborgg/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.itcfyn.dk/svendborgg/saml2/idp/metadata.php?unit=svendborgg',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.itcfyn.dk/tornby/saml2/idp/metadata.php?unit=tornby' => true,
      '_HOSTED_/wayf.itcfyn.dk/tornby/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.itcfyn.dk/tornby/saml2/idp/metadata.php?unit=tornby',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.itcfyn.dk/tornbjerg/saml2/idp/metadata.php?unit=tornbjerg' => true,
      '_HOSTED_/wayf.itcfyn.dk/tornbjerg/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.itcfyn.dk/tornbjerg/saml2/idp/metadata.php?unit=tornbjerg',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.itcfyn.dk/vestfynsg/saml2/idp/metadata.php?unit=vestfynsg' => true,
      '_HOSTED_/wayf.itcfyn.dk/vestfynsg/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.itcfyn.dk/vestfynsg/saml2/idp/metadata.php?unit=vestfynsg',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.itcfyn.dk/vucfyn/saml2/idp/metadata.php?unit=vucfyn' => true,
      '_HOSTED_/wayf.itcfyn.dk/vucfyn/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.itcfyn.dk/vucfyn/saml2/idp/metadata.php?unit=vucfyn',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.itcfyn.dk/sosufyn/saml2/idp/metadata.php?unit=sosufyn' => true,
      '_HOSTED_/wayf.itcfyn.dk/sosufyn/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.itcfyn.dk/sosufyn/saml2/idp/metadata.php?unit=sosufyn',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.itcfyn.dk/humanica/saml2/idp/metadata.php?unit=humanica' => true,
      '_HOSTED_/wayf.itcfyn.dk/humanica/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.itcfyn.dk/humanica/saml2/idp/metadata.php?unit=humanica',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.itcfyn.dk/sosufh/saml2/idp/metadata.php?unit=sosufh' => true,
      '_HOSTED_/wayf.itcfyn.dk/sosufh/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.itcfyn.dk/sosufh/saml2/idp/metadata.php?unit=sosufh',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.itcfyn.dk/fagy/saml2/idp/metadata.php?unit=fagy' => true,
      '_HOSTED_/wayf.itcfyn.dk/fagy/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.itcfyn.dk/fagy/saml2/idp/metadata.php?unit=fagy',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/idp.statsbiblioteket.dk/sb/saml2/idp/metadata.php' => true,
      '_HOSTED_/idp.statsbiblioteket.dk/sb/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/idp.statsbiblioteket.dk/sb/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.itcfyn.dk/bornholm-gym/saml2/idp/metadata.php?unit=bornholm-gym' => true,
      '_HOSTED_/wayf.itcfyn.dk/bornholm-gym/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.itcfyn.dk/bornholm-gym/saml2/idp/metadata.php?unit=bornholm-gym',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.itcfyn.dk/vuc-bornholm/saml2/idp/metadata.php?unit=vuc-bornholm' => true,
      '_HOSTED_/wayf.itcfyn.dk/vuc-bornholm/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.itcfyn.dk/vuc-bornholm/saml2/idp/metadata.php?unit=vuc-bornholm',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.supportcenter.dk/og/saml2/idp/metadata.php?unit=og' => true,
      '_HOSTED_/wayf.supportcenter.dk/og/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.supportcenter.dk/og/saml2/idp/metadata.php?unit=og',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.supportcenter.dk/aa/saml2/idp/metadata.php?unit=aa' => true,
      '_HOSTED_/wayf.supportcenter.dk/aa/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.supportcenter.dk/aa/saml2/idp/metadata.php?unit=aa',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.supportcenter.dk/aip/saml2/idp/metadata.php?unit=aip' => true,
      '_HOSTED_/wayf.supportcenter.dk/aip/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.supportcenter.dk/aip/saml2/idp/metadata.php?unit=aip',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.supportcenter.dk/ak/saml2/idp/metadata.php?unit=ak' => true,
      '_HOSTED_/wayf.supportcenter.dk/ak/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.supportcenter.dk/ak/saml2/idp/metadata.php?unit=ak',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.supportcenter.dk/akat/saml2/idp/metadata.php?unit=akat' => true,
      '_HOSTED_/wayf.supportcenter.dk/akat/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.supportcenter.dk/akat/saml2/idp/metadata.php?unit=akat',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.supportcenter.dk/asg/saml2/idp/metadata.php?unit=asg' => true,
      '_HOSTED_/wayf.supportcenter.dk/asg/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.supportcenter.dk/asg/saml2/idp/metadata.php?unit=asg',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.supportcenter.dk/eg/saml2/idp/metadata.php?unit=eg' => true,
      '_HOSTED_/wayf.supportcenter.dk/eg/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.supportcenter.dk/eg/saml2/idp/metadata.php?unit=eg',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.supportcenter.dk/gg/saml2/idp/metadata.php?unit=gg' => true,
      '_HOSTED_/wayf.supportcenter.dk/gg/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.supportcenter.dk/gg/saml2/idp/metadata.php?unit=gg',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.supportcenter.dk/lg/saml2/idp/metadata.php?unit=lg' => true,
      '_HOSTED_/wayf.supportcenter.dk/lg/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.supportcenter.dk/lg/saml2/idp/metadata.php?unit=lg',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.supportcenter.dk/mg/saml2/idp/metadata.php?unit=mg' => true,
      '_HOSTED_/wayf.supportcenter.dk/mg/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.supportcenter.dk/mg/saml2/idp/metadata.php?unit=mg',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.supportcenter.dk/ra/saml2/idp/metadata.php?unit=ra' => true,
      '_HOSTED_/wayf.supportcenter.dk/ra/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.supportcenter.dk/ra/saml2/idp/metadata.php?unit=ra',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.supportcenter.dk/rs/saml2/idp/metadata.php?unit=rs' => true,
      '_HOSTED_/wayf.supportcenter.dk/rs/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.supportcenter.dk/rs/saml2/idp/metadata.php?unit=rs',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.supportcenter.dk/sg/saml2/idp/metadata.php?unit=sg' => true,
      '_HOSTED_/wayf.supportcenter.dk/sg/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.supportcenter.dk/sg/saml2/idp/metadata.php?unit=sg',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.supportcenter.dk/sgy/saml2/idp/metadata.php?unit=sgy' => true,
      '_HOSTED_/wayf.supportcenter.dk/sgy/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.supportcenter.dk/sgy/saml2/idp/metadata.php?unit=sgy',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.supportcenter.dk/sosur/saml2/idp/metadata.php?unit=sosur' => true,
      '_HOSTED_/wayf.supportcenter.dk/sosur/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.supportcenter.dk/sosur/saml2/idp/metadata.php?unit=sosur',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.supportcenter.dk/sska/saml2/idp/metadata.php?unit=sska' => true,
      '_HOSTED_/wayf.supportcenter.dk/sska/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.supportcenter.dk/sska/saml2/idp/metadata.php?unit=sska',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.supportcenter.dk/sss/saml2/idp/metadata.php?unit=sss' => true,
      '_HOSTED_/wayf.supportcenter.dk/sss/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.supportcenter.dk/sss/saml2/idp/metadata.php?unit=sss',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.supportcenter.dk/stv/saml2/idp/metadata.php?unit=stv' => true,
      '_HOSTED_/wayf.supportcenter.dk/stv/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.supportcenter.dk/stv/saml2/idp/metadata.php?unit=stv',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.supportcenter.dk/udc/saml2/idp/metadata.php?unit=udc' => true,
      '_HOSTED_/wayf.supportcenter.dk/udc/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.supportcenter.dk/udc/saml2/idp/metadata.php?unit=udc',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.supportcenter.dk/vd/saml2/idp/metadata.php?unit=vd' => true,
      '_HOSTED_/wayf.supportcenter.dk/vd/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.supportcenter.dk/vd/saml2/idp/metadata.php?unit=vd',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.supportcenter.dk/vhg/saml2/idp/metadata.php?unit=vhg' => true,
      '_HOSTED_/wayf.supportcenter.dk/vhg/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.supportcenter.dk/vhg/saml2/idp/metadata.php?unit=vhg',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.supportcenter.dk/via/saml2/idp/metadata.php?unit=via' => true,
      '_HOSTED_/wayf.supportcenter.dk/via/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.supportcenter.dk/via/saml2/idp/metadata.php?unit=via',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.supportcenter.dk/its/saml2/idp/metadata.php?unit=its' => true,
      '_HOSTED_/wayf.supportcenter.dk/its/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.supportcenter.dk/its/saml2/idp/metadata.php?unit=its',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/nemlogin.wayf.dk' => true,
      '_HOSTED_/nemlogin.wayf.dk/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/nemlogin.wayf.dk',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.regionsjaelland.dk/saml2/idp/metadata.php' => true,
      '_HOSTED_/wayf.regionsjaelland.dk/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.regionsjaelland.dk/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.ibc.dk/simplesaml/saml2/idp/metadata.php' => true,
      '_HOSTED_/wayf.ibc.dk/simplesaml/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.ibc.dk/simplesaml/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/simpelsaml.natmus.dk/saml2/idp/metadata.php' => true,
      '_HOSTED_/simpelsaml.natmus.dk/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/simpelsaml.natmus.dk/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.rungsted-gym.dk/saml2/idp/metadata.php' => true,
      '_HOSTED_/wayf.rungsted-gym.dk/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.rungsted-gym.dk/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.gymund.dk/ar/saml2/idp/metadata.php' => true,
      '_HOSTED_/wayf.gymund.dk/ar/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.gymund.dk/ar/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.gymund.dk/gg/saml2/idp/metadata.php' => true,
      '_HOSTED_/wayf.gymund.dk/gg/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.gymund.dk/gg/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.gymund.dk/hg/saml2/idp/metadata.php' => true,
      '_HOSTED_/wayf.gymund.dk/hg/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.gymund.dk/hg/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.gymund.dk/kg/saml2/idp/metadata.php' => true,
      '_HOSTED_/wayf.gymund.dk/kg/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.gymund.dk/kg/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.gymund.dk/rk/saml2/idp/metadata.php' => true,
      '_HOSTED_/wayf.gymund.dk/rk/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.gymund.dk/rk/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.gymund.dk/sg/saml2/idp/metadata.php' => true,
      '_HOSTED_/wayf.gymund.dk/sg/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.gymund.dk/sg/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/sso.ucsj.dk:443/idp' => true,
      '_HOSTED_/sso.ucsj.dk:443/idp/SSORedirect/metaAlias/idp' => 
      array (
        'EntityID' => '_HOSTED_/sso.ucsj.dk:443/idp',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.cphwest.dk/sosuc/saml2/idp/metadata.php' => true,
      '_HOSTED_/wayf.cphwest.dk/sosuc/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.cphwest.dk/sosuc/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.cphwest.dk/kea/saml2/idp/metadata.php' => true,
      '_HOSTED_/wayf.cphwest.dk/kea/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.cphwest.dk/kea/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.cphwest.dk/cphwest/saml2/idp/metadata.php' => true,
      '_HOSTED_/wayf.cphwest.dk/cphwest/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.cphwest.dk/cphwest/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.minibib.dk/dab' => true,
      '_HOSTED_/wayf.minibib.dk/dab/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.minibib.dk/dab',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.minibib.dk/akf' => true,
      '_HOSTED_/wayf.minibib.dk/akf/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.minibib.dk/akf',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.minibib.dk/bst' => true,
      '_HOSTED_/wayf.minibib.dk/bst/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.minibib.dk/bst',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.minibib.dk/dmi' => true,
      '_HOSTED_/wayf.minibib.dk/dmi/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.minibib.dk/dmi',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.minibib.dk/ism' => true,
      '_HOSTED_/wayf.minibib.dk/ism/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.minibib.dk/ism',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.minibib.dk/ens' => true,
      '_HOSTED_/wayf.minibib.dk/ens/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.minibib.dk/ens',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.minibib.dk/fbo' => true,
      '_HOSTED_/wayf.minibib.dk/fbo/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.minibib.dk/fbo',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.minibib.dk/fob' => true,
      '_HOSTED_/wayf.minibib.dk/fob/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.minibib.dk/fob',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.minibib.dk/fsv' => true,
      '_HOSTED_/wayf.minibib.dk/fsv/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.minibib.dk/fsv',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.minibib.dk/ksb' => true,
      '_HOSTED_/wayf.minibib.dk/ksb/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.minibib.dk/ksb',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.minibib.dk/kul' => true,
      '_HOSTED_/wayf.minibib.dk/kul/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.minibib.dk/kul',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.minibib.dk/ami' => true,
      '_HOSTED_/wayf.minibib.dk/ami/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.minibib.dk/ami',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.minibib.dk/sfi' => true,
      '_HOSTED_/wayf.minibib.dk/sfi/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.minibib.dk/sfi',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.minibib.dk/ank' => true,
      '_HOSTED_/wayf.minibib.dk/ank/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.minibib.dk/ank',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.minibib.dk/vfc' => true,
      '_HOSTED_/wayf.minibib.dk/vfc/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.minibib.dk/vfc',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.minibib.dk/stm' => true,
      '_HOSTED_/wayf.minibib.dk/stm/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.minibib.dk/stm',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.minibib.dk/vej' => true,
      '_HOSTED_/wayf.minibib.dk/vej/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.minibib.dk/vej',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/auth.dsl.dk/simplesaml/saml2/idp/metadata.php' => true,
      '_HOSTED_/auth.dsl.dk/simplesaml/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/auth.dsl.dk/simplesaml/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.itcfyn.dk/sosusyd/saml2/idp/metadata.php?unit=sosusyd' => true,
      '_HOSTED_/wayf.itcfyn.dk/sosusyd/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.itcfyn.dk/sosusyd/saml2/idp/metadata.php?unit=sosusyd',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.videndjurs.dk/saml2/idp/metadata.php' => true,
      '_HOSTED_/wayf.videndjurs.dk/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.videndjurs.dk/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.itcfyn.dk/munkensdam/saml2/idp/metadata.php?unit=munkensdam' => true,
      '_HOSTED_/wayf.itcfyn.dk/munkensdam/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.itcfyn.dk/munkensdam/saml2/idp/metadata.php?unit=munkensdam',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.itcfyn.dk/odensekatedralskole/saml2/idp/metadata.php?unit=odensekatedralskole' => true,
      '_HOSTED_/wayf.itcfyn.dk/odensekatedralskole/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.itcfyn.dk/odensekatedralskole/saml2/idp/metadata.php?unit=odensekatedralskole',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/www.studievej14.dk/saml2/idp/metadata.php' => true,
      '_HOSTED_/www.studievej14.dk/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/www.studievej14.dk/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.cg-gym.dk' => true,
      '_HOSTED_/wayf.cg-gym.dk/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/wayf.cg-gym.dk',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
    ),
  ),
);