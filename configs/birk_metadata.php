return array (
  'federations' => 
  array (
    'testing' => 
    array (
      '_HOSTED_/ude@edu' => 
      array (
        'entityID' => '_HOSTED_/ude@edu',
        'federation' => 'testing',
        'original' => 
        array (
          '_entityID' => '_HOSTED_/ude@edu',
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
                  '_Location' => '_COHOSTED_/birk.php/ude@edu/ACS',
                  '_index' => 1,
                ),
              ),
              'md:SingleLogoutService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'JSON-Redirect',
                  '_Location' => '_COHOSTED_/birk.php/ude@edu/SLO',
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
              'Location' => '_COHOSTED_/birk.php/ude@edu/ACS',
              'Binding' => 'JSON-Redirect',
              'isDefault' => NULL,
            ),
            'default' => 1,
          ),
          'SingleLogoutService' => 
          array (
            1 => 
            array (
              'Location' => '_COHOSTED_/birk.php/ude@edu/SLO',
              'Binding' => 'JSON-Redirect',
              'isDefault' => NULL,
            ),
          ),
          'saveSLOInfo' => true,
        ),
      ),
      '_HOSTED_/ude@edu-proxy' => 
      array (
        'entityID' => '_HOSTED_/ude@edu-proxy',
        'federation' => 'testing',
        'original' => 
        array (
          '_entityID' => '_HOSTED_/ude@edu-proxy',
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
                  '_Location' => '_HOSTED_/ude@edu-proxy/ACS',
                  '_index' => 1,
                ),
              ),
              'md:SingleLogoutService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'JSON-Redirect',
                  '_Location' => '_HOSTED_/ude@edu-proxy/SLO',
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
              'Location' => '_HOSTED_/ude@edu-proxy/ACS',
              'Binding' => 'JSON-Redirect',
              'isDefault' => NULL,
            ),
            'default' => 1,
          ),
          'SingleLogoutService' => 
          array (
            1 => 
            array (
              'Location' => '_HOSTED_/ude@edu-proxy/SLO',
              'Binding' => 'JSON-Redirect',
              'isDefault' => NULL,
            ),
          ),
          'saveSLOInfo' => true,
        ),
      ),
      '_COMMON_' => 
      array (
        'entityID' => '_COMMON_',
        'federation' => 'testing',
        'original' => 
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
            'md:Extensions' => 
            array (
              'mdattr:EntityAttributes' => 
              array (
                'saml:Attribute' => 
                array (
                  0 => 
                  array (
                    '_Name' => 'corto:ProxySP',
                    'saml:AttributeValue' => 
                    array (
                      0 => 
                      array (
                        '__v' => '_HOSTED_/ude@edu-proxy',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
          '_entityID' => '_COMMON_',
        ),
      ),
      '_HOSTED_/wayf.wayf.dk' => 
      array (
        'entityID' => '_HOSTED_/wayf.wayf.dk',
        'federation' => 'testing',
        'original' => 
        array (
          '_entityID' => '_HOSTED_/wayf.wayf.dk',
          'md:IDPSSODescriptor' => 
          array (
            0 => 
            array (
              '_protocolSupportEnumeration' => 'urn:oasis:names:tc:SAML:2.0:protocol',
              'md:SingleSignOnService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                  '_Location' => '_HOSTED_/wayf.wayf.dk/SSO',
                ),
              ),
              'md:SingleLogoutService' => 
              array (
                0 => 
                array (
                  '_Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
                  '_Location' => '_HOSTED_/wayf.wayf.dk/SLO',
                  '_index' => 1,
                ),
              ),
            ),
          ),
        ),
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.wayf.dk/SSO',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'SingleLogoutService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.wayf.dk/SLO',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
            ),
          ),
          'saveSLOInfo' => true,
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
    ),
  ),
  'lookuptable' => 
  array (
    'testing' => 
    array (
      '_COHOSTED_/birk.php/ude@edu/ACS' => 
      array (
        'EntityID' => '_HOSTED_/ude@edu',
        'Service' => 'AssertionConsumerService',
        'Binding' => 'JSON-Redirect',
      ),
      '_COHOSTED_/birk.php/ude@edu/SLO' => 
      array (
        'EntityID' => '_HOSTED_/ude@edu',
        'Service' => 'SingleLogoutService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/ude@edu' => true,
      '_HOSTED_/ude@edu-proxy/ACS' => 
      array (
        'EntityID' => '_HOSTED_/ude@edu-proxy',
        'Service' => 'AssertionConsumerService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/ude@edu-proxy/SLO' => 
      array (
        'EntityID' => '_HOSTED_/ude@edu-proxy',
        'Service' => 'SingleLogoutService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/ude@edu-proxy' => true,
      '_COMMON_' => true,
      '_HOSTED_/wayf.wayf.dk' => true,
      '_HOSTED_/wayf.wayf.dk/SSO' => 
      array (
        'EntityID' => '_HOSTED_/wayf.wayf.dk',
        'Service' => 'SingleSignOnService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      ),
      '_HOSTED_/wayf.wayf.dk/SLO' => 
      array (
        'EntityID' => '_HOSTED_/wayf.wayf.dk',
        'Service' => 'SingleLogoutService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
      ),
      '_COHOSTED_/null.php' => true,
    ),
  ),
);