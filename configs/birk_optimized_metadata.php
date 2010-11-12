return array (
  'federations' => 
  array (
    'testing' => 
    array (
      '_HOSTED_/ude@evil' => 
      array (
        'entityID' => '_HOSTED_/ude@evil',
        'federation' => 'testing',
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
              'Location' => '_COHOSTED_/birk.php/ACS',
              'Binding' => 'JSON-Redirect',
              'isDefault' => NULL,
            ),
            'default' => 1,
          ),
          'SingleLogoutService' => 
          array (
            1 => 
            array (
              'Location' => '_COHOSTED_/birk.php/ude@evil/SLO',
              'Binding' => 'JSON-Redirect',
              'isDefault' => NULL,
            ),
          ),
          'saveSLOInfo' => true,
          'corto:proxySP' => 
          array (
            0 => 
            array (
              '__v' => '_HOSTED_/ude@evil-proxy',
            ),
          ),
        ),
      ),
      '_HOSTED_/ude@evil-proxy' => 
      array (
        'entityID' => '_HOSTED_/ude@evil-proxy',
        'federation' => 'testing',
        'SP' => 
        array (
          'AssertionConsumerService' => 
          array (
            1 => 
            array (
              'Location' => '_HOSTED_/ude@evil-proxy/ACS',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
              'isDefault' => NULL,
            ),
            'default' => 1,
          ),
          'SingleLogoutService' => 
          array (
            1 => 
            array (
              'Location' => '_HOSTED_/ude@evil-proxy/SLO',
              'Binding' => 'JSON-Redirect',
              'isDefault' => NULL,
            ),
          ),
          'saveSLOInfo' => true,
        ),
      ),
      '_HOSTED_/wayf.wayf.dk' => 
      array (
        'entityID' => '_HOSTED_/wayf.wayf.dk',
        'federation' => 'testing',
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
        'SP' => 
        array (
          'AssertionConsumerService' => 
          array (
            1 => 
            array (
              'Location' => '_HOSTED_/wayf.wayf.dk/ACS',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
              'isDefault' => NULL,
            ),
            'default' => 1,
          ),
          'SingleLogoutService' => 
          array (
            1 => 
            array (
              'Location' => '_HOSTED_/wayf.wayf.dk/SLO',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
              'isDefault' => NULL,
            ),
          ),
          'saveSLOInfo' => true,
        ),
      ),
      '_COHOSTED_/null.php' => 
      array (
        'entityID' => '_COHOSTED_/null.php',
        'federation' => 'testing',
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
      '_HOSTED_/proxy/wayf.au.dk' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.au.dk',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.au.dk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.au.dk',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.au.dk' => 
      array (
        'entityID' => '_HOSTED_/wayf.au.dk',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.au.dk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/https:/betahosted.wayf.dk/dtu/hostedidp' => 
      array (
        'entityID' => '_HOSTED_/proxy/https:/betahosted.wayf.dk/dtu/hostedidp',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/betahosted.wayf.dk/dtu/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/https:/betahosted.wayf.dk/dtu/hostedidp',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/https:/betahosted.wayf.dk/dtu/hostedidp' => 
      array (
        'entityID' => '_HOSTED_/https:/betahosted.wayf.dk/dtu/hostedidp',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/betahosted.wayf.dk/dtu/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.kb.dk/stafflogin' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.kb.dk/stafflogin',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.kb.dk/stafflogin/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.kb.dk/stafflogin',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.kb.dk/stafflogin' => 
      array (
        'entityID' => '_HOSTED_/wayf.kb.dk/stafflogin',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.kb.dk/stafflogin/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.kb.dk/login' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.kb.dk/login',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.kb.dk/login/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.kb.dk/login',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.kb.dk/login' => 
      array (
        'entityID' => '_HOSTED_/wayf.kb.dk/login',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.kb.dk/login/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.hi.is/simplesaml/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.hi.is/simplesaml/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.hi.is/simplesaml/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.hi.is/simplesaml/saml2/idp/metadata.php',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.hi.is/simplesaml/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/wayf.hi.is/simplesaml/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.hi.is/simplesaml/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/betahosted.wayf.dk/ku/hostedidp' => 
      array (
        'entityID' => '_HOSTED_/proxy/betahosted.wayf.dk/ku/hostedidp',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/betahosted.wayf.dk/ku/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/betahosted.wayf.dk/ku/hostedidp',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/betahosted.wayf.dk/ku/hostedidp' => 
      array (
        'entityID' => '_HOSTED_/betahosted.wayf.dk/ku/hostedidp',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/betahosted.wayf.dk/ku/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.ruc.dk/idp' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.ruc.dk/idp',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.ruc.dk/idp/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.ruc.dk/idp',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.ruc.dk/idp' => 
      array (
        'entityID' => '_HOSTED_/wayf.ruc.dk/idp',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.ruc.dk/idp/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.tietgen.dk/simplesaml/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.tietgen.dk/simplesaml/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.tietgen.dk/simplesaml/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.tietgen.dk/simplesaml/saml2/idp/metadata.php',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.tietgen.dk/simplesaml/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/wayf.tietgen.dk/simplesaml/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.tietgen.dk/simplesaml/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/secure.ucsyd.dk/simplesaml/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/proxy/secure.ucsyd.dk/simplesaml/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/secure.ucsyd.dk/simplesaml/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/secure.ucsyd.dk/simplesaml/saml2/idp/metadata.php',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/secure.ucsyd.dk/simplesaml/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/secure.ucsyd.dk/simplesaml/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/secure.ucsyd.dk/simplesaml/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/orphanage.wayf.dk' => 
      array (
        'entityID' => '_HOSTED_/proxy/orphanage.wayf.dk',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/orphanage.wayf.dk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/orphanage.wayf.dk',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/orphanage.wayf.dk' => 
      array (
        'entityID' => '_HOSTED_/orphanage.wayf.dk',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/orphanage.wayf.dk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/sso.ucl.dk/simplesaml/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/proxy/sso.ucl.dk/simplesaml/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/sso.ucl.dk/simplesaml/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/sso.ucl.dk/simplesaml/saml2/idp/metadata.php',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/sso.ucl.dk/simplesaml/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/sso.ucl.dk/simplesaml/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/sso.ucl.dk/simplesaml/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.viauc.dk/simplesaml/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.viauc.dk/simplesaml/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.viauc.dk/simplesaml/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.viauc.dk/simplesaml/saml2/idp/metadata.php',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.viauc.dk/simplesaml/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/wayf.viauc.dk/simplesaml/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.viauc.dk/simplesaml/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.phmetropol.dk/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.phmetropol.dk/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.phmetropol.dk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.phmetropol.dk/saml2/idp/metadata.php',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.phmetropol.dk/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/wayf.phmetropol.dk/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.phmetropol.dk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.ihk.dk/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.ihk.dk/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.ihk.dk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.ihk.dk/saml2/idp/metadata.php',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.ihk.dk/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/wayf.ihk.dk/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.ihk.dk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/ovalo.cbs.dk/saml/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/proxy/ovalo.cbs.dk/saml/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/ovalo.cbs.dk/saml/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/ovalo.cbs.dk/saml/saml2/idp/metadata.php',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/ovalo.cbs.dk/saml/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/ovalo.cbs.dk/saml/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/ovalo.cbs.dk/saml/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.ucc.dk/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.ucc.dk/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.ucc.dk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.ucc.dk/saml2/idp/metadata.php',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.ucc.dk/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/wayf.ucc.dk/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.ucc.dk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/sso.drlund-gym.dk/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/proxy/sso.drlund-gym.dk/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/sso.drlund-gym.dk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/sso.drlund-gym.dk/saml2/idp/metadata.php',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/sso.drlund-gym.dk/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/sso.drlund-gym.dk/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/sso.drlund-gym.dk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.iha.dk/simplesaml/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.iha.dk/simplesaml/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.iha.dk/simplesaml/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.iha.dk/simplesaml/saml2/idp/metadata.php',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.iha.dk/simplesaml/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/wayf.iha.dk/simplesaml/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.iha.dk/simplesaml/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/ssoproxy2.emu.dk/simplesaml/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/proxy/ssoproxy2.emu.dk/simplesaml/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/ssoproxy2.emu.dk/simplesaml/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/ssoproxy2.emu.dk/simplesaml/saml2/idp/metadata.php',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/ssoproxy2.emu.dk/simplesaml/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/ssoproxy2.emu.dk/simplesaml/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/ssoproxy2.emu.dk/simplesaml/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/sso.sdu.dk/wayf' => 
      array (
        'entityID' => '_HOSTED_/proxy/sso.sdu.dk/wayf',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.sdu.dk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/sso.sdu.dk/wayf',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/sso.sdu.dk/wayf' => 
      array (
        'entityID' => '_HOSTED_/sso.sdu.dk/wayf',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.sdu.dk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.akademiaarhus.dk/simplesaml-eaa/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.akademiaarhus.dk/simplesaml-eaa/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.akademiaarhus.dk/simplesaml-eaa/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.akademiaarhus.dk/simplesaml-eaa/saml2/idp/metadata.php',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.akademiaarhus.dk/simplesaml-eaa/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/wayf.akademiaarhus.dk/simplesaml-eaa/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.akademiaarhus.dk/simplesaml-eaa/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.itu.dk/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.itu.dk/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.itu.dk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.itu.dk/saml2/idp/metadata.php',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.itu.dk/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/wayf.itu.dk/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itu.dk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/sso.ucn.dk/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/proxy/sso.ucn.dk/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/sso.ucn.dk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/sso.ucn.dk/saml2/idp/metadata.php',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/sso.ucn.dk/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/sso.ucn.dk/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/sso.ucn.dk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/frg/saml2/idp/metadata.php?unit=frg' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/frg/saml2/idp/metadata.php?unit=frg',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.itcfyn.dk/frg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.itcfyn.dk/frg/saml2/idp/metadata.php?unit=frg',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/frg/saml2/idp/metadata.php?unit=frg' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/frg/saml2/idp/metadata.php?unit=frg',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/frg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/ags/saml2/idp/metadata.php?unit=ags' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/ags/saml2/idp/metadata.php?unit=ags',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.itcfyn.dk/ags/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.itcfyn.dk/ags/saml2/idp/metadata.php?unit=ags',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/ags/saml2/idp/metadata.php?unit=ags' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/ags/saml2/idp/metadata.php?unit=ags',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/ags/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/nordfyns/saml2/idp/metadata.php?unit=nordfyns' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/nordfyns/saml2/idp/metadata.php?unit=nordfyns',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.itcfyn.dk/nordfyns/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.itcfyn.dk/nordfyns/saml2/idp/metadata.php?unit=nordfyns',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/nordfyns/saml2/idp/metadata.php?unit=nordfyns' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/nordfyns/saml2/idp/metadata.php?unit=nordfyns',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/nordfyns/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/ringe/saml2/idp/metadata.php?unit=ringe' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/ringe/saml2/idp/metadata.php?unit=ringe',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.itcfyn.dk/ringe/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.itcfyn.dk/ringe/saml2/idp/metadata.php?unit=ringe',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/ringe/saml2/idp/metadata.php?unit=ringe' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/ringe/saml2/idp/metadata.php?unit=ringe',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/ringe/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/middelfart/saml2/idp/metadata.php?unit=middelfart' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/middelfart/saml2/idp/metadata.php?unit=middelfart',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.itcfyn.dk/middelfart/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.itcfyn.dk/middelfart/saml2/idp/metadata.php?unit=middelfart',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/middelfart/saml2/idp/metadata.php?unit=middelfart' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/middelfart/saml2/idp/metadata.php?unit=middelfart',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/middelfart/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/kg/saml2/idp/metadata.php?unit=kg' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/kg/saml2/idp/metadata.php?unit=kg',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.itcfyn.dk/kg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.itcfyn.dk/kg/saml2/idp/metadata.php?unit=kg',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/kg/saml2/idp/metadata.php?unit=kg' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/kg/saml2/idp/metadata.php?unit=kg',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/kg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/maribo/saml2/idp/metadata.php?unit=maribo' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/maribo/saml2/idp/metadata.php?unit=maribo',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.itcfyn.dk/maribo/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.itcfyn.dk/maribo/saml2/idp/metadata.php?unit=maribo',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/maribo/saml2/idp/metadata.php?unit=maribo' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/maribo/saml2/idp/metadata.php?unit=maribo',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/maribo/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/mulernes/saml2/idp/metadata.php?unit=mulernes' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/mulernes/saml2/idp/metadata.php?unit=mulernes',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.itcfyn.dk/mulernes/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.itcfyn.dk/mulernes/saml2/idp/metadata.php?unit=mulernes',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/mulernes/saml2/idp/metadata.php?unit=mulernes' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/mulernes/saml2/idp/metadata.php?unit=mulernes',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/mulernes/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/nakskov/saml2/idp/metadata.php?unit=nakskov' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/nakskov/saml2/idp/metadata.php?unit=nakskov',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.itcfyn.dk/nakskov/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.itcfyn.dk/nakskov/saml2/idp/metadata.php?unit=nakskov',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/nakskov/saml2/idp/metadata.php?unit=nakskov' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/nakskov/saml2/idp/metadata.php?unit=nakskov',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/nakskov/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/norreg/saml2/idp/metadata.php?unit=norreg' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/norreg/saml2/idp/metadata.php?unit=norreg',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.itcfyn.dk/norreg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.itcfyn.dk/norreg/saml2/idp/metadata.php?unit=norreg',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/norreg/saml2/idp/metadata.php?unit=norreg' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/norreg/saml2/idp/metadata.php?unit=norreg',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/norreg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/nyborg/saml2/idp/metadata.php?unit=nyborg' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/nyborg/saml2/idp/metadata.php?unit=nyborg',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.itcfyn.dk/nyborg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.itcfyn.dk/nyborg/saml2/idp/metadata.php?unit=nyborg',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/nyborg/saml2/idp/metadata.php?unit=nyborg' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/nyborg/saml2/idp/metadata.php?unit=nyborg',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/nyborg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/ribek/saml2/idp/metadata.php?unit=ribek' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/ribek/saml2/idp/metadata.php?unit=ribek',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.itcfyn.dk/ribek/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.itcfyn.dk/ribek/saml2/idp/metadata.php?unit=ribek',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/ribek/saml2/idp/metadata.php?unit=ribek' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/ribek/saml2/idp/metadata.php?unit=ribek',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/ribek/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/sctknud/saml2/idp/metadata.php?unit=sctknud' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/sctknud/saml2/idp/metadata.php?unit=sctknud',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.itcfyn.dk/sctknud/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.itcfyn.dk/sctknud/saml2/idp/metadata.php?unit=sctknud',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/sctknud/saml2/idp/metadata.php?unit=sctknud' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/sctknud/saml2/idp/metadata.php?unit=sctknud',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/sctknud/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/svendborgg/saml2/idp/metadata.php?unit=svendborgg' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/svendborgg/saml2/idp/metadata.php?unit=svendborgg',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.itcfyn.dk/svendborgg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.itcfyn.dk/svendborgg/saml2/idp/metadata.php?unit=svendborgg',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/svendborgg/saml2/idp/metadata.php?unit=svendborgg' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/svendborgg/saml2/idp/metadata.php?unit=svendborgg',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/svendborgg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/tornby/saml2/idp/metadata.php?unit=tornby' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/tornby/saml2/idp/metadata.php?unit=tornby',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.itcfyn.dk/tornby/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.itcfyn.dk/tornby/saml2/idp/metadata.php?unit=tornby',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/tornby/saml2/idp/metadata.php?unit=tornby' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/tornby/saml2/idp/metadata.php?unit=tornby',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/tornby/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/tornbjerg/saml2/idp/metadata.php?unit=tornbjerg' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/tornbjerg/saml2/idp/metadata.php?unit=tornbjerg',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.itcfyn.dk/tornbjerg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.itcfyn.dk/tornbjerg/saml2/idp/metadata.php?unit=tornbjerg',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/tornbjerg/saml2/idp/metadata.php?unit=tornbjerg' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/tornbjerg/saml2/idp/metadata.php?unit=tornbjerg',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/tornbjerg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/vestfynsg/saml2/idp/metadata.php?unit=vestfynsg' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/vestfynsg/saml2/idp/metadata.php?unit=vestfynsg',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.itcfyn.dk/vestfynsg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.itcfyn.dk/vestfynsg/saml2/idp/metadata.php?unit=vestfynsg',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/vestfynsg/saml2/idp/metadata.php?unit=vestfynsg' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/vestfynsg/saml2/idp/metadata.php?unit=vestfynsg',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/vestfynsg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/vucfyn/saml2/idp/metadata.php?unit=vucfyn' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/vucfyn/saml2/idp/metadata.php?unit=vucfyn',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.itcfyn.dk/vucfyn/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.itcfyn.dk/vucfyn/saml2/idp/metadata.php?unit=vucfyn',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/vucfyn/saml2/idp/metadata.php?unit=vucfyn' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/vucfyn/saml2/idp/metadata.php?unit=vucfyn',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/vucfyn/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/sosufyn/saml2/idp/metadata.php?unit=sosufyn' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/sosufyn/saml2/idp/metadata.php?unit=sosufyn',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.itcfyn.dk/sosufyn/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.itcfyn.dk/sosufyn/saml2/idp/metadata.php?unit=sosufyn',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/sosufyn/saml2/idp/metadata.php?unit=sosufyn' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/sosufyn/saml2/idp/metadata.php?unit=sosufyn',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/sosufyn/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/humanica/saml2/idp/metadata.php?unit=humanica' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/humanica/saml2/idp/metadata.php?unit=humanica',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.itcfyn.dk/humanica/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.itcfyn.dk/humanica/saml2/idp/metadata.php?unit=humanica',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/humanica/saml2/idp/metadata.php?unit=humanica' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/humanica/saml2/idp/metadata.php?unit=humanica',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/humanica/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/sosufh/saml2/idp/metadata.php?unit=sosufh' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/sosufh/saml2/idp/metadata.php?unit=sosufh',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.itcfyn.dk/sosufh/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.itcfyn.dk/sosufh/saml2/idp/metadata.php?unit=sosufh',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/sosufh/saml2/idp/metadata.php?unit=sosufh' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/sosufh/saml2/idp/metadata.php?unit=sosufh',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/sosufh/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/fagy/saml2/idp/metadata.php?unit=fagy' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/fagy/saml2/idp/metadata.php?unit=fagy',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.itcfyn.dk/fagy/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.itcfyn.dk/fagy/saml2/idp/metadata.php?unit=fagy',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/fagy/saml2/idp/metadata.php?unit=fagy' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/fagy/saml2/idp/metadata.php?unit=fagy',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/fagy/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/idp.statsbiblioteket.dk/sb/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/proxy/idp.statsbiblioteket.dk/sb/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/idp.statsbiblioteket.dk/sb/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/idp.statsbiblioteket.dk/sb/saml2/idp/metadata.php',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/idp.statsbiblioteket.dk/sb/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/idp.statsbiblioteket.dk/sb/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/idp.statsbiblioteket.dk/sb/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/bornholm-gym/saml2/idp/metadata.php?unit=bornholm-gym' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/bornholm-gym/saml2/idp/metadata.php?unit=bornholm-gym',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.itcfyn.dk/bornholm-gym/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.itcfyn.dk/bornholm-gym/saml2/idp/metadata.php?unit=bornholm-gym',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/bornholm-gym/saml2/idp/metadata.php?unit=bornholm-gym' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/bornholm-gym/saml2/idp/metadata.php?unit=bornholm-gym',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/bornholm-gym/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/vuc-bornholm/saml2/idp/metadata.php?unit=vuc-bornholm' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/vuc-bornholm/saml2/idp/metadata.php?unit=vuc-bornholm',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.itcfyn.dk/vuc-bornholm/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.itcfyn.dk/vuc-bornholm/saml2/idp/metadata.php?unit=vuc-bornholm',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/vuc-bornholm/saml2/idp/metadata.php?unit=vuc-bornholm' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/vuc-bornholm/saml2/idp/metadata.php?unit=vuc-bornholm',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/vuc-bornholm/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.supportcenter.dk/og/saml2/idp/metadata.php?unit=og' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.supportcenter.dk/og/saml2/idp/metadata.php?unit=og',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.supportcenter.dk/og/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.supportcenter.dk/og/saml2/idp/metadata.php?unit=og',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.supportcenter.dk/og/saml2/idp/metadata.php?unit=og' => 
      array (
        'entityID' => '_HOSTED_/wayf.supportcenter.dk/og/saml2/idp/metadata.php?unit=og',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.supportcenter.dk/og/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.supportcenter.dk/aa/saml2/idp/metadata.php?unit=aa' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.supportcenter.dk/aa/saml2/idp/metadata.php?unit=aa',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.supportcenter.dk/aa/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.supportcenter.dk/aa/saml2/idp/metadata.php?unit=aa',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.supportcenter.dk/aa/saml2/idp/metadata.php?unit=aa' => 
      array (
        'entityID' => '_HOSTED_/wayf.supportcenter.dk/aa/saml2/idp/metadata.php?unit=aa',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.supportcenter.dk/aa/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.supportcenter.dk/aip/saml2/idp/metadata.php?unit=aip' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.supportcenter.dk/aip/saml2/idp/metadata.php?unit=aip',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.supportcenter.dk/aip/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.supportcenter.dk/aip/saml2/idp/metadata.php?unit=aip',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.supportcenter.dk/aip/saml2/idp/metadata.php?unit=aip' => 
      array (
        'entityID' => '_HOSTED_/wayf.supportcenter.dk/aip/saml2/idp/metadata.php?unit=aip',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.supportcenter.dk/aip/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.supportcenter.dk/ak/saml2/idp/metadata.php?unit=ak' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.supportcenter.dk/ak/saml2/idp/metadata.php?unit=ak',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.supportcenter.dk/ak/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.supportcenter.dk/ak/saml2/idp/metadata.php?unit=ak',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.supportcenter.dk/ak/saml2/idp/metadata.php?unit=ak' => 
      array (
        'entityID' => '_HOSTED_/wayf.supportcenter.dk/ak/saml2/idp/metadata.php?unit=ak',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.supportcenter.dk/ak/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.supportcenter.dk/akat/saml2/idp/metadata.php?unit=akat' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.supportcenter.dk/akat/saml2/idp/metadata.php?unit=akat',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.supportcenter.dk/akat/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.supportcenter.dk/akat/saml2/idp/metadata.php?unit=akat',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.supportcenter.dk/akat/saml2/idp/metadata.php?unit=akat' => 
      array (
        'entityID' => '_HOSTED_/wayf.supportcenter.dk/akat/saml2/idp/metadata.php?unit=akat',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.supportcenter.dk/akat/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.supportcenter.dk/asg/saml2/idp/metadata.php?unit=asg' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.supportcenter.dk/asg/saml2/idp/metadata.php?unit=asg',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.supportcenter.dk/asg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.supportcenter.dk/asg/saml2/idp/metadata.php?unit=asg',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.supportcenter.dk/asg/saml2/idp/metadata.php?unit=asg' => 
      array (
        'entityID' => '_HOSTED_/wayf.supportcenter.dk/asg/saml2/idp/metadata.php?unit=asg',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.supportcenter.dk/asg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.supportcenter.dk/eg/saml2/idp/metadata.php?unit=eg' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.supportcenter.dk/eg/saml2/idp/metadata.php?unit=eg',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.supportcenter.dk/eg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.supportcenter.dk/eg/saml2/idp/metadata.php?unit=eg',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.supportcenter.dk/eg/saml2/idp/metadata.php?unit=eg' => 
      array (
        'entityID' => '_HOSTED_/wayf.supportcenter.dk/eg/saml2/idp/metadata.php?unit=eg',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.supportcenter.dk/eg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.supportcenter.dk/gg/saml2/idp/metadata.php?unit=gg' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.supportcenter.dk/gg/saml2/idp/metadata.php?unit=gg',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.supportcenter.dk/gg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.supportcenter.dk/gg/saml2/idp/metadata.php?unit=gg',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.supportcenter.dk/gg/saml2/idp/metadata.php?unit=gg' => 
      array (
        'entityID' => '_HOSTED_/wayf.supportcenter.dk/gg/saml2/idp/metadata.php?unit=gg',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.supportcenter.dk/gg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.supportcenter.dk/lg/saml2/idp/metadata.php?unit=lg' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.supportcenter.dk/lg/saml2/idp/metadata.php?unit=lg',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.supportcenter.dk/lg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.supportcenter.dk/lg/saml2/idp/metadata.php?unit=lg',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.supportcenter.dk/lg/saml2/idp/metadata.php?unit=lg' => 
      array (
        'entityID' => '_HOSTED_/wayf.supportcenter.dk/lg/saml2/idp/metadata.php?unit=lg',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.supportcenter.dk/lg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.supportcenter.dk/mg/saml2/idp/metadata.php?unit=mg' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.supportcenter.dk/mg/saml2/idp/metadata.php?unit=mg',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.supportcenter.dk/mg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.supportcenter.dk/mg/saml2/idp/metadata.php?unit=mg',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.supportcenter.dk/mg/saml2/idp/metadata.php?unit=mg' => 
      array (
        'entityID' => '_HOSTED_/wayf.supportcenter.dk/mg/saml2/idp/metadata.php?unit=mg',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.supportcenter.dk/mg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.supportcenter.dk/ra/saml2/idp/metadata.php?unit=ra' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.supportcenter.dk/ra/saml2/idp/metadata.php?unit=ra',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.supportcenter.dk/ra/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.supportcenter.dk/ra/saml2/idp/metadata.php?unit=ra',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.supportcenter.dk/ra/saml2/idp/metadata.php?unit=ra' => 
      array (
        'entityID' => '_HOSTED_/wayf.supportcenter.dk/ra/saml2/idp/metadata.php?unit=ra',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.supportcenter.dk/ra/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.supportcenter.dk/rs/saml2/idp/metadata.php?unit=rs' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.supportcenter.dk/rs/saml2/idp/metadata.php?unit=rs',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.supportcenter.dk/rs/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.supportcenter.dk/rs/saml2/idp/metadata.php?unit=rs',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.supportcenter.dk/rs/saml2/idp/metadata.php?unit=rs' => 
      array (
        'entityID' => '_HOSTED_/wayf.supportcenter.dk/rs/saml2/idp/metadata.php?unit=rs',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.supportcenter.dk/rs/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.supportcenter.dk/sg/saml2/idp/metadata.php?unit=sg' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.supportcenter.dk/sg/saml2/idp/metadata.php?unit=sg',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.supportcenter.dk/sg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.supportcenter.dk/sg/saml2/idp/metadata.php?unit=sg',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.supportcenter.dk/sg/saml2/idp/metadata.php?unit=sg' => 
      array (
        'entityID' => '_HOSTED_/wayf.supportcenter.dk/sg/saml2/idp/metadata.php?unit=sg',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.supportcenter.dk/sg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.supportcenter.dk/sgy/saml2/idp/metadata.php?unit=sgy' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.supportcenter.dk/sgy/saml2/idp/metadata.php?unit=sgy',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.supportcenter.dk/sgy/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.supportcenter.dk/sgy/saml2/idp/metadata.php?unit=sgy',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.supportcenter.dk/sgy/saml2/idp/metadata.php?unit=sgy' => 
      array (
        'entityID' => '_HOSTED_/wayf.supportcenter.dk/sgy/saml2/idp/metadata.php?unit=sgy',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.supportcenter.dk/sgy/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.supportcenter.dk/sosur/saml2/idp/metadata.php?unit=sosur' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.supportcenter.dk/sosur/saml2/idp/metadata.php?unit=sosur',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.supportcenter.dk/sosur/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.supportcenter.dk/sosur/saml2/idp/metadata.php?unit=sosur',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.supportcenter.dk/sosur/saml2/idp/metadata.php?unit=sosur' => 
      array (
        'entityID' => '_HOSTED_/wayf.supportcenter.dk/sosur/saml2/idp/metadata.php?unit=sosur',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.supportcenter.dk/sosur/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.supportcenter.dk/sska/saml2/idp/metadata.php?unit=sska' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.supportcenter.dk/sska/saml2/idp/metadata.php?unit=sska',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.supportcenter.dk/sska/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.supportcenter.dk/sska/saml2/idp/metadata.php?unit=sska',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.supportcenter.dk/sska/saml2/idp/metadata.php?unit=sska' => 
      array (
        'entityID' => '_HOSTED_/wayf.supportcenter.dk/sska/saml2/idp/metadata.php?unit=sska',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.supportcenter.dk/sska/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.supportcenter.dk/sss/saml2/idp/metadata.php?unit=sss' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.supportcenter.dk/sss/saml2/idp/metadata.php?unit=sss',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.supportcenter.dk/sss/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.supportcenter.dk/sss/saml2/idp/metadata.php?unit=sss',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.supportcenter.dk/sss/saml2/idp/metadata.php?unit=sss' => 
      array (
        'entityID' => '_HOSTED_/wayf.supportcenter.dk/sss/saml2/idp/metadata.php?unit=sss',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.supportcenter.dk/sss/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.supportcenter.dk/stv/saml2/idp/metadata.php?unit=stv' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.supportcenter.dk/stv/saml2/idp/metadata.php?unit=stv',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.supportcenter.dk/stv/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.supportcenter.dk/stv/saml2/idp/metadata.php?unit=stv',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.supportcenter.dk/stv/saml2/idp/metadata.php?unit=stv' => 
      array (
        'entityID' => '_HOSTED_/wayf.supportcenter.dk/stv/saml2/idp/metadata.php?unit=stv',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.supportcenter.dk/stv/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.supportcenter.dk/udc/saml2/idp/metadata.php?unit=udc' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.supportcenter.dk/udc/saml2/idp/metadata.php?unit=udc',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.supportcenter.dk/udc/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.supportcenter.dk/udc/saml2/idp/metadata.php?unit=udc',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.supportcenter.dk/udc/saml2/idp/metadata.php?unit=udc' => 
      array (
        'entityID' => '_HOSTED_/wayf.supportcenter.dk/udc/saml2/idp/metadata.php?unit=udc',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.supportcenter.dk/udc/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.supportcenter.dk/vd/saml2/idp/metadata.php?unit=vd' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.supportcenter.dk/vd/saml2/idp/metadata.php?unit=vd',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.supportcenter.dk/vd/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.supportcenter.dk/vd/saml2/idp/metadata.php?unit=vd',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.supportcenter.dk/vd/saml2/idp/metadata.php?unit=vd' => 
      array (
        'entityID' => '_HOSTED_/wayf.supportcenter.dk/vd/saml2/idp/metadata.php?unit=vd',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.supportcenter.dk/vd/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.supportcenter.dk/vhg/saml2/idp/metadata.php?unit=vhg' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.supportcenter.dk/vhg/saml2/idp/metadata.php?unit=vhg',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.supportcenter.dk/vhg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.supportcenter.dk/vhg/saml2/idp/metadata.php?unit=vhg',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.supportcenter.dk/vhg/saml2/idp/metadata.php?unit=vhg' => 
      array (
        'entityID' => '_HOSTED_/wayf.supportcenter.dk/vhg/saml2/idp/metadata.php?unit=vhg',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.supportcenter.dk/vhg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.supportcenter.dk/via/saml2/idp/metadata.php?unit=via' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.supportcenter.dk/via/saml2/idp/metadata.php?unit=via',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.supportcenter.dk/via/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.supportcenter.dk/via/saml2/idp/metadata.php?unit=via',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.supportcenter.dk/via/saml2/idp/metadata.php?unit=via' => 
      array (
        'entityID' => '_HOSTED_/wayf.supportcenter.dk/via/saml2/idp/metadata.php?unit=via',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.supportcenter.dk/via/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.supportcenter.dk/its/saml2/idp/metadata.php?unit=its' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.supportcenter.dk/its/saml2/idp/metadata.php?unit=its',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.supportcenter.dk/its/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.supportcenter.dk/its/saml2/idp/metadata.php?unit=its',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.supportcenter.dk/its/saml2/idp/metadata.php?unit=its' => 
      array (
        'entityID' => '_HOSTED_/wayf.supportcenter.dk/its/saml2/idp/metadata.php?unit=its',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.supportcenter.dk/its/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/nemlogin.wayf.dk' => 
      array (
        'entityID' => '_HOSTED_/proxy/nemlogin.wayf.dk',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/nemlogin.wayf.dk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/nemlogin.wayf.dk',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/nemlogin.wayf.dk' => 
      array (
        'entityID' => '_HOSTED_/nemlogin.wayf.dk',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/nemlogin.wayf.dk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.regionsjaelland.dk/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.regionsjaelland.dk/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.regionsjaelland.dk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.regionsjaelland.dk/saml2/idp/metadata.php',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.regionsjaelland.dk/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/wayf.regionsjaelland.dk/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.regionsjaelland.dk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.ibc.dk/simplesaml/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.ibc.dk/simplesaml/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.ibc.dk/simplesaml/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.ibc.dk/simplesaml/saml2/idp/metadata.php',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.ibc.dk/simplesaml/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/wayf.ibc.dk/simplesaml/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.ibc.dk/simplesaml/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/simpelsaml.natmus.dk/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/proxy/simpelsaml.natmus.dk/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/simpelsaml.natmus.dk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/simpelsaml.natmus.dk/saml2/idp/metadata.php',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/simpelsaml.natmus.dk/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/simpelsaml.natmus.dk/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/simpelsaml.natmus.dk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.rungsted-gym.dk/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.rungsted-gym.dk/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.rungsted-gym.dk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.rungsted-gym.dk/saml2/idp/metadata.php',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.rungsted-gym.dk/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/wayf.rungsted-gym.dk/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.rungsted-gym.dk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.gymund.dk/ar/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.gymund.dk/ar/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.gymund.dk/ar/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.gymund.dk/ar/saml2/idp/metadata.php',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.gymund.dk/ar/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/wayf.gymund.dk/ar/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.gymund.dk/ar/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.gymund.dk/gg/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.gymund.dk/gg/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.gymund.dk/gg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.gymund.dk/gg/saml2/idp/metadata.php',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.gymund.dk/gg/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/wayf.gymund.dk/gg/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.gymund.dk/gg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.gymund.dk/hg/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.gymund.dk/hg/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.gymund.dk/hg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.gymund.dk/hg/saml2/idp/metadata.php',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.gymund.dk/hg/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/wayf.gymund.dk/hg/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.gymund.dk/hg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.gymund.dk/kg/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.gymund.dk/kg/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.gymund.dk/kg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.gymund.dk/kg/saml2/idp/metadata.php',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.gymund.dk/kg/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/wayf.gymund.dk/kg/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.gymund.dk/kg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.gymund.dk/rk/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.gymund.dk/rk/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.gymund.dk/rk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.gymund.dk/rk/saml2/idp/metadata.php',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.gymund.dk/rk/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/wayf.gymund.dk/rk/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.gymund.dk/rk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.gymund.dk/sg/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.gymund.dk/sg/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.gymund.dk/sg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.gymund.dk/sg/saml2/idp/metadata.php',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.gymund.dk/sg/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/wayf.gymund.dk/sg/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.gymund.dk/sg/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/sso.ucsj.dk:443/idp' => 
      array (
        'entityID' => '_HOSTED_/proxy/sso.ucsj.dk:443/idp',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/sso.ucsj.dk:443/idp/SSORedirect/metaAlias/idp',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/sso.ucsj.dk:443/idp',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/sso.ucsj.dk:443/idp' => 
      array (
        'entityID' => '_HOSTED_/sso.ucsj.dk:443/idp',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/sso.ucsj.dk:443/idp/SSORedirect/metaAlias/idp',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.cphwest.dk/sosuc/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.cphwest.dk/sosuc/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.cphwest.dk/sosuc/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.cphwest.dk/sosuc/saml2/idp/metadata.php',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.cphwest.dk/sosuc/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/wayf.cphwest.dk/sosuc/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.cphwest.dk/sosuc/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.cphwest.dk/kea/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.cphwest.dk/kea/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.cphwest.dk/kea/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.cphwest.dk/kea/saml2/idp/metadata.php',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.cphwest.dk/kea/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/wayf.cphwest.dk/kea/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.cphwest.dk/kea/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.cphwest.dk/cphwest/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.cphwest.dk/cphwest/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.cphwest.dk/cphwest/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.cphwest.dk/cphwest/saml2/idp/metadata.php',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.cphwest.dk/cphwest/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/wayf.cphwest.dk/cphwest/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.cphwest.dk/cphwest/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.minibib.dk/dab' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.minibib.dk/dab',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.minibib.dk/dab/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.minibib.dk/dab',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.minibib.dk/dab' => 
      array (
        'entityID' => '_HOSTED_/wayf.minibib.dk/dab',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.minibib.dk/dab/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.minibib.dk/akf' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.minibib.dk/akf',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.minibib.dk/akf/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.minibib.dk/akf',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.minibib.dk/akf' => 
      array (
        'entityID' => '_HOSTED_/wayf.minibib.dk/akf',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.minibib.dk/akf/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.minibib.dk/bst' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.minibib.dk/bst',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.minibib.dk/bst/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.minibib.dk/bst',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.minibib.dk/bst' => 
      array (
        'entityID' => '_HOSTED_/wayf.minibib.dk/bst',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.minibib.dk/bst/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.minibib.dk/dmi' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.minibib.dk/dmi',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.minibib.dk/dmi/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.minibib.dk/dmi',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.minibib.dk/dmi' => 
      array (
        'entityID' => '_HOSTED_/wayf.minibib.dk/dmi',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.minibib.dk/dmi/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.minibib.dk/ism' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.minibib.dk/ism',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.minibib.dk/ism/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.minibib.dk/ism',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.minibib.dk/ism' => 
      array (
        'entityID' => '_HOSTED_/wayf.minibib.dk/ism',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.minibib.dk/ism/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.minibib.dk/ens' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.minibib.dk/ens',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.minibib.dk/ens/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.minibib.dk/ens',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.minibib.dk/ens' => 
      array (
        'entityID' => '_HOSTED_/wayf.minibib.dk/ens',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.minibib.dk/ens/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.minibib.dk/fbo' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.minibib.dk/fbo',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.minibib.dk/fbo/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.minibib.dk/fbo',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.minibib.dk/fbo' => 
      array (
        'entityID' => '_HOSTED_/wayf.minibib.dk/fbo',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.minibib.dk/fbo/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.minibib.dk/fob' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.minibib.dk/fob',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.minibib.dk/fob/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.minibib.dk/fob',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.minibib.dk/fob' => 
      array (
        'entityID' => '_HOSTED_/wayf.minibib.dk/fob',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.minibib.dk/fob/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.minibib.dk/fsv' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.minibib.dk/fsv',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.minibib.dk/fsv/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.minibib.dk/fsv',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.minibib.dk/fsv' => 
      array (
        'entityID' => '_HOSTED_/wayf.minibib.dk/fsv',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.minibib.dk/fsv/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.minibib.dk/ksb' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.minibib.dk/ksb',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.minibib.dk/ksb/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.minibib.dk/ksb',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.minibib.dk/ksb' => 
      array (
        'entityID' => '_HOSTED_/wayf.minibib.dk/ksb',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.minibib.dk/ksb/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.minibib.dk/kul' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.minibib.dk/kul',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.minibib.dk/kul/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.minibib.dk/kul',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.minibib.dk/kul' => 
      array (
        'entityID' => '_HOSTED_/wayf.minibib.dk/kul',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.minibib.dk/kul/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.minibib.dk/ami' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.minibib.dk/ami',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.minibib.dk/ami/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.minibib.dk/ami',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.minibib.dk/ami' => 
      array (
        'entityID' => '_HOSTED_/wayf.minibib.dk/ami',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.minibib.dk/ami/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.minibib.dk/sfi' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.minibib.dk/sfi',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.minibib.dk/sfi/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.minibib.dk/sfi',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.minibib.dk/sfi' => 
      array (
        'entityID' => '_HOSTED_/wayf.minibib.dk/sfi',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.minibib.dk/sfi/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.minibib.dk/ank' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.minibib.dk/ank',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.minibib.dk/ank/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.minibib.dk/ank',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.minibib.dk/ank' => 
      array (
        'entityID' => '_HOSTED_/wayf.minibib.dk/ank',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.minibib.dk/ank/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.minibib.dk/vfc' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.minibib.dk/vfc',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.minibib.dk/vfc/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.minibib.dk/vfc',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.minibib.dk/vfc' => 
      array (
        'entityID' => '_HOSTED_/wayf.minibib.dk/vfc',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.minibib.dk/vfc/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.minibib.dk/stm' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.minibib.dk/stm',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.minibib.dk/stm/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.minibib.dk/stm',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.minibib.dk/stm' => 
      array (
        'entityID' => '_HOSTED_/wayf.minibib.dk/stm',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.minibib.dk/stm/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.minibib.dk/vej' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.minibib.dk/vej',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.minibib.dk/vej/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.minibib.dk/vej',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.minibib.dk/vej' => 
      array (
        'entityID' => '_HOSTED_/wayf.minibib.dk/vej',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.minibib.dk/vej/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/auth.dsl.dk/simplesaml/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/proxy/auth.dsl.dk/simplesaml/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/auth.dsl.dk/simplesaml/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/auth.dsl.dk/simplesaml/saml2/idp/metadata.php',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/auth.dsl.dk/simplesaml/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/auth.dsl.dk/simplesaml/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/auth.dsl.dk/simplesaml/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/sosusyd/saml2/idp/metadata.php?unit=sosusyd' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/sosusyd/saml2/idp/metadata.php?unit=sosusyd',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.itcfyn.dk/sosusyd/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.itcfyn.dk/sosusyd/saml2/idp/metadata.php?unit=sosusyd',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/sosusyd/saml2/idp/metadata.php?unit=sosusyd' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/sosusyd/saml2/idp/metadata.php?unit=sosusyd',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/sosusyd/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.videndjurs.dk/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.videndjurs.dk/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.videndjurs.dk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.videndjurs.dk/saml2/idp/metadata.php',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.videndjurs.dk/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/wayf.videndjurs.dk/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.videndjurs.dk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/munkensdam/saml2/idp/metadata.php?unit=munkensdam' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/munkensdam/saml2/idp/metadata.php?unit=munkensdam',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.itcfyn.dk/munkensdam/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.itcfyn.dk/munkensdam/saml2/idp/metadata.php?unit=munkensdam',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/munkensdam/saml2/idp/metadata.php?unit=munkensdam' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/munkensdam/saml2/idp/metadata.php?unit=munkensdam',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/munkensdam/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/odensekatedralskole/saml2/idp/metadata.php?unit=odensekatedralskole' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/odensekatedralskole/saml2/idp/metadata.php?unit=odensekatedralskole',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.itcfyn.dk/odensekatedralskole/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.itcfyn.dk/odensekatedralskole/saml2/idp/metadata.php?unit=odensekatedralskole',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.itcfyn.dk/odensekatedralskole/saml2/idp/metadata.php?unit=odensekatedralskole' => 
      array (
        'entityID' => '_HOSTED_/wayf.itcfyn.dk/odensekatedralskole/saml2/idp/metadata.php?unit=odensekatedralskole',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.itcfyn.dk/odensekatedralskole/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/www.studievej14.dk/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/proxy/www.studievej14.dk/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/www.studievej14.dk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/www.studievej14.dk/saml2/idp/metadata.php',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/www.studievej14.dk/saml2/idp/metadata.php' => 
      array (
        'entityID' => '_HOSTED_/www.studievej14.dk/saml2/idp/metadata.php',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/www.studievej14.dk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/proxy/wayf.cg-gym.dk' => 
      array (
        'entityID' => '_HOSTED_/proxy/wayf.cg-gym.dk',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/proxy/wayf.cg-gym.dk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'corto:IDPList' => 
          array (
            0 => '_HOSTED_/wayf.wayf.dk',
            1 => '_HOSTED_/wayf.cg-gym.dk',
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
      '_HOSTED_/wayf.cg-gym.dk' => 
      array (
        'entityID' => '_HOSTED_/wayf.cg-gym.dk',
        'federation' => 'testing',
        'IDP' => 
        array (
          'SingleSignOnService' => 
          array (
            0 => 
            array (
              'Location' => '_HOSTED_/wayf.cg-gym.dk/saml2/idp/SSOService.php',
              'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            ),
          ),
          'signing' => 
          array (
            'X509Certificate' => 'MIICgTCCAeoCCQCbOlrWDdX7FTANBgkqhkiG9w0BAQUFADCBhDELMAkGA1UEBhMCTk8xGDAWBgNVBAgTD0FuZHJlYXMgU29sYmVyZzEMMAoGA1UEBxMDRm9vMRAwDgYDVQQKEwdVTklORVRUMRgwFgYDVQQDEw9mZWlkZS5lcmxhbmcubm8xITAfBgkqhkiG9w0BCQEWEmFuZHJlYXNAdW5pbmV0dC5ubzAeFw0wNzA2MTUxMjAxMzVaFw0wNzA4MTQxMjAxMzVaMIGEMQswCQYDVQQGEwJOTzEYMBYGA1UECBMPQW5kcmVhcyBTb2xiZXJnMQwwCgYDVQQHEwNGb28xEDAOBgNVBAoTB1VOSU5FVFQxGDAWBgNVBAMTD2ZlaWRlLmVybGFuZy5ubzEhMB8GCSqGSIb3DQEJARYSYW5kcmVhc0B1bmluZXR0Lm5vMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDivbhR7P516x/S3BqKxupQe0LONoliupiBOesCO3SHbDrl3+q9IbfnfmE04rNuMcPsIxB161TdDpIesLCn7c8aPHISKOtPlAeTZSnb8QAu7aRjZq3+PbrP5uW3TcfCGPtKTytHOge/OlJbo078dVhXQ14d1EDwXJW1rRXuUt4C8QIDAQABMA0GCSqGSIb3DQEBBQUAA4GBACDVfp86HObqY+e8BUoWQ9+VMQx1ASDohBjwOsg2WykUqRXF+dLfcUH9dWR63CtZIKFDbStNomPnQz7nbK+onygwBspVEbnHuUihZq3ZUdmumQqCw4Uvs/1Uvq3orOo/WJVhTyvLgFVK2QarQ4/67OZfHd7R+POBXhophSMv1ZOo',
          ),
          'corto:IDPList' => 
          array (
            0 => '_COHOSTED_/null.php',
          ),
        ),
        'corto:sharedkey' => 
        array (
          0 => 
          array (
            '__v' => 'abrakadabra',
          ),
        ),
      ),
    ),
  ),
  'lookuptable' => 
  array (
    'testing' => 
    array (
      '_COHOSTED_/birk.php/ACS' => 
      array (
        'EntityID' => '_HOSTED_/ude@evil',
        'Service' => 'AssertionConsumerService',
        'Binding' => 'JSON-Redirect',
      ),
      '_COHOSTED_/birk.php/ude@evil/SLO' => 
      array (
        'EntityID' => '_HOSTED_/ude@evil',
        'Service' => 'SingleLogoutService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/ude@evil' => true,
      '_HOSTED_/ude@evil-proxy/ACS' => 
      array (
        'EntityID' => '_HOSTED_/ude@evil-proxy',
        'Service' => 'AssertionConsumerService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      ),
      '_HOSTED_/ude@evil-proxy/SLO' => 
      array (
        'EntityID' => '_HOSTED_/ude@evil-proxy',
        'Service' => 'SingleLogoutService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/ude@evil-proxy' => true,
      '_HOSTED_/wayf.wayf.dk/ACS' => 
      array (
        'EntityID' => '_HOSTED_/wayf.wayf.dk',
        'Service' => 'AssertionConsumerService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      ),
      '_HOSTED_/wayf.wayf.dk/SLO' => 
      array (
        'EntityID' => '_HOSTED_/wayf.wayf.dk',
        'Service' => 'SingleLogoutService',
        'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
      ),
      '_HOSTED_/wayf.wayf.dk' => true,
      '_HOSTED_/wayf.wayf.dk/SSO' => 
      array (
        'EntityID' => '_HOSTED_/wayf.wayf.dk',
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
      '_HOSTED_/proxy/wayf.au.dk/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.au.dk',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/betahosted.wayf.dk/dtu/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/https:/betahosted.wayf.dk/dtu/hostedidp',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.kb.dk/stafflogin/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.kb.dk/stafflogin',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.kb.dk/login/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.kb.dk/login',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.hi.is/simplesaml/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.hi.is/simplesaml/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/betahosted.wayf.dk/ku/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/betahosted.wayf.dk/ku/hostedidp',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.ruc.dk/idp/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.ruc.dk/idp',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.tietgen.dk/simplesaml/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.tietgen.dk/simplesaml/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/secure.ucsyd.dk/simplesaml/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/secure.ucsyd.dk/simplesaml/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/orphanage.wayf.dk/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/orphanage.wayf.dk',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/sso.ucl.dk/simplesaml/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/sso.ucl.dk/simplesaml/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.viauc.dk/simplesaml/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.viauc.dk/simplesaml/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.phmetropol.dk/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.phmetropol.dk/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.ihk.dk/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.ihk.dk/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/ovalo.cbs.dk/saml/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/ovalo.cbs.dk/saml/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.ucc.dk/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.ucc.dk/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/sso.drlund-gym.dk/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/sso.drlund-gym.dk/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.iha.dk/simplesaml/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.iha.dk/simplesaml/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/ssoproxy2.emu.dk/simplesaml/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/ssoproxy2.emu.dk/simplesaml/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.sdu.dk/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/sso.sdu.dk/wayf',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.akademiaarhus.dk/simplesaml-eaa/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.akademiaarhus.dk/simplesaml-eaa/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.itu.dk/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.itu.dk/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/sso.ucn.dk/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/sso.ucn.dk/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/frg/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/frg/saml2/idp/metadata.php?unit=frg',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/ags/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/ags/saml2/idp/metadata.php?unit=ags',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/nordfyns/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/nordfyns/saml2/idp/metadata.php?unit=nordfyns',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/ringe/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/ringe/saml2/idp/metadata.php?unit=ringe',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/middelfart/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/middelfart/saml2/idp/metadata.php?unit=middelfart',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/kg/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/kg/saml2/idp/metadata.php?unit=kg',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/maribo/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/maribo/saml2/idp/metadata.php?unit=maribo',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/mulernes/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/mulernes/saml2/idp/metadata.php?unit=mulernes',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/nakskov/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/nakskov/saml2/idp/metadata.php?unit=nakskov',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/norreg/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/norreg/saml2/idp/metadata.php?unit=norreg',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/nyborg/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/nyborg/saml2/idp/metadata.php?unit=nyborg',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/ribek/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/ribek/saml2/idp/metadata.php?unit=ribek',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/sctknud/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/sctknud/saml2/idp/metadata.php?unit=sctknud',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/svendborgg/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/svendborgg/saml2/idp/metadata.php?unit=svendborgg',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/tornby/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/tornby/saml2/idp/metadata.php?unit=tornby',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/tornbjerg/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/tornbjerg/saml2/idp/metadata.php?unit=tornbjerg',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/vestfynsg/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/vestfynsg/saml2/idp/metadata.php?unit=vestfynsg',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/vucfyn/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/vucfyn/saml2/idp/metadata.php?unit=vucfyn',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/sosufyn/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/sosufyn/saml2/idp/metadata.php?unit=sosufyn',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/humanica/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/humanica/saml2/idp/metadata.php?unit=humanica',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/sosufh/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/sosufh/saml2/idp/metadata.php?unit=sosufh',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/fagy/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/fagy/saml2/idp/metadata.php?unit=fagy',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/idp.statsbiblioteket.dk/sb/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/idp.statsbiblioteket.dk/sb/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/bornholm-gym/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/bornholm-gym/saml2/idp/metadata.php?unit=bornholm-gym',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/vuc-bornholm/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/vuc-bornholm/saml2/idp/metadata.php?unit=vuc-bornholm',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.supportcenter.dk/og/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.supportcenter.dk/og/saml2/idp/metadata.php?unit=og',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.supportcenter.dk/aa/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.supportcenter.dk/aa/saml2/idp/metadata.php?unit=aa',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.supportcenter.dk/aip/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.supportcenter.dk/aip/saml2/idp/metadata.php?unit=aip',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.supportcenter.dk/ak/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.supportcenter.dk/ak/saml2/idp/metadata.php?unit=ak',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.supportcenter.dk/akat/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.supportcenter.dk/akat/saml2/idp/metadata.php?unit=akat',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.supportcenter.dk/asg/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.supportcenter.dk/asg/saml2/idp/metadata.php?unit=asg',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.supportcenter.dk/eg/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.supportcenter.dk/eg/saml2/idp/metadata.php?unit=eg',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.supportcenter.dk/gg/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.supportcenter.dk/gg/saml2/idp/metadata.php?unit=gg',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.supportcenter.dk/lg/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.supportcenter.dk/lg/saml2/idp/metadata.php?unit=lg',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.supportcenter.dk/mg/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.supportcenter.dk/mg/saml2/idp/metadata.php?unit=mg',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.supportcenter.dk/ra/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.supportcenter.dk/ra/saml2/idp/metadata.php?unit=ra',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.supportcenter.dk/rs/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.supportcenter.dk/rs/saml2/idp/metadata.php?unit=rs',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.supportcenter.dk/sg/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.supportcenter.dk/sg/saml2/idp/metadata.php?unit=sg',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.supportcenter.dk/sgy/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.supportcenter.dk/sgy/saml2/idp/metadata.php?unit=sgy',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.supportcenter.dk/sosur/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.supportcenter.dk/sosur/saml2/idp/metadata.php?unit=sosur',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.supportcenter.dk/sska/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.supportcenter.dk/sska/saml2/idp/metadata.php?unit=sska',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.supportcenter.dk/sss/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.supportcenter.dk/sss/saml2/idp/metadata.php?unit=sss',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.supportcenter.dk/stv/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.supportcenter.dk/stv/saml2/idp/metadata.php?unit=stv',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.supportcenter.dk/udc/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.supportcenter.dk/udc/saml2/idp/metadata.php?unit=udc',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.supportcenter.dk/vd/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.supportcenter.dk/vd/saml2/idp/metadata.php?unit=vd',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.supportcenter.dk/vhg/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.supportcenter.dk/vhg/saml2/idp/metadata.php?unit=vhg',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.supportcenter.dk/via/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.supportcenter.dk/via/saml2/idp/metadata.php?unit=via',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.supportcenter.dk/its/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.supportcenter.dk/its/saml2/idp/metadata.php?unit=its',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/nemlogin.wayf.dk/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/nemlogin.wayf.dk',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.regionsjaelland.dk/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.regionsjaelland.dk/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.ibc.dk/simplesaml/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.ibc.dk/simplesaml/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/simpelsaml.natmus.dk/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/simpelsaml.natmus.dk/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.rungsted-gym.dk/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.rungsted-gym.dk/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.gymund.dk/ar/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.gymund.dk/ar/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.gymund.dk/gg/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.gymund.dk/gg/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.gymund.dk/hg/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.gymund.dk/hg/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.gymund.dk/kg/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.gymund.dk/kg/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.gymund.dk/rk/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.gymund.dk/rk/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.gymund.dk/sg/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.gymund.dk/sg/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/sso.ucsj.dk:443/idp/SSORedirect/metaAlias/idp' => 
      array (
        'EntityID' => '_HOSTED_/proxy/sso.ucsj.dk:443/idp',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.cphwest.dk/sosuc/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.cphwest.dk/sosuc/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.cphwest.dk/kea/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.cphwest.dk/kea/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.cphwest.dk/cphwest/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.cphwest.dk/cphwest/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.minibib.dk/dab/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.minibib.dk/dab',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.minibib.dk/akf/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.minibib.dk/akf',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.minibib.dk/bst/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.minibib.dk/bst',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.minibib.dk/dmi/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.minibib.dk/dmi',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.minibib.dk/ism/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.minibib.dk/ism',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.minibib.dk/ens/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.minibib.dk/ens',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.minibib.dk/fbo/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.minibib.dk/fbo',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.minibib.dk/fob/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.minibib.dk/fob',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.minibib.dk/fsv/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.minibib.dk/fsv',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.minibib.dk/ksb/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.minibib.dk/ksb',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.minibib.dk/kul/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.minibib.dk/kul',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.minibib.dk/ami/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.minibib.dk/ami',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.minibib.dk/sfi/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.minibib.dk/sfi',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.minibib.dk/ank/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.minibib.dk/ank',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.minibib.dk/vfc/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.minibib.dk/vfc',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.minibib.dk/stm/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.minibib.dk/stm',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.minibib.dk/vej/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.minibib.dk/vej',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/auth.dsl.dk/simplesaml/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/auth.dsl.dk/simplesaml/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/sosusyd/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/sosusyd/saml2/idp/metadata.php?unit=sosusyd',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.videndjurs.dk/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.videndjurs.dk/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/munkensdam/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/munkensdam/saml2/idp/metadata.php?unit=munkensdam',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.itcfyn.dk/odensekatedralskole/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.itcfyn.dk/odensekatedralskole/saml2/idp/metadata.php?unit=odensekatedralskole',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/www.studievej14.dk/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/www.studievej14.dk/saml2/idp/metadata.php',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
      '_HOSTED_/proxy/wayf.cg-gym.dk/saml2/idp/SSOService.php' => 
      array (
        'EntityID' => '_HOSTED_/proxy/wayf.cg-gym.dk',
        'Service' => 'SingleSignOnService',
        'Binding' => 'JSON-Redirect',
      ),
    ),
  ),
);