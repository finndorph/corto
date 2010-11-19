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
                                                    array('_use' => 'signing', '__v' => 'MIIEmwIBAAKCAQAAqy8WhGwxwupZOTt88F9BzqcgD/Hu8SukmerGhLhKMWtx46AA
SFv8VPP4Sg46JhUYy8uuyR7urLxYCLdxw/Fqbkfg50nI2zDhZ6Lz6Pm/ktqGLNAh
D0x0em0Wd6C9236SnHD6HJquOd8V+Lpus+5tGZ4XjanJ00g/zwubAGCd0KCufI8A
G4Y90dDoONhD/2NLDHlldqDS3Lkel5ntsK8GQq+cP/UpDuCtXOq8PlCONO5iY+Im
eXPUqjqOHCviWlOO5l/CJQBq5KbnixJtTwzcS8SILSTlQQXN2ttgqeIq065mcWU2
IgV/13PHA0kQXr6f+tGOL6ljgiafVct54soLAgMBAAECgf8SAdwOhgseA+Tq3lUg
PAUCJhZ7VunZuMuR3V6Qq4oydKkAVt5wvixnC1r8/04in2mCVqTGR1i4Fv/zushe
4lBd1XXVHq/gTt4HNt8NjOgYHKCsqiAwKcy+7CbG4sPWCRSHHGNTCvp04ADBr2rh
xpz3aufzYP74GMuNjhz6By/StbO2stjT1yBVxBbZdgMwXCaW6sK60LJlBUF3h8pY
DGvzuvJSakP1a7OS1dt0eR7BQZOVEFVFDrZLz45RVQyrOSRhuTaghC/rx9uSQdLx
5EDRHC3bTahSwkOOFqgJKSHyzFGEIJY8jmJuE78bet3fcPNj7BGsStl+W5SbkECO
/DECgYANF0HuM6IRhv7hSDW4Tx28xM9Ii018i2LFmXyW+QSOkBBs5j7IlK/fUiGh
PlHH2255w6RNDuG752sHy5dLWKJqAxcc+N5a9EyNjEbtiaNnlcIR0gdjwLo/7VrD
kLAHCHieMQKWBwzYjIGvJjqbpbkx2M+OvVixam221vSN/EdwnQKBgA0TnLbysli1
dDqvxguCRdyhTpfy1VClb2sSjk1gXb8F0vEpz7CwAqERnNJIJFyctCxmpxPHtBbd
VY7rx1635xRDvO6NzDkqP5SXHxtpqNpsvCm59E9z+imuSE9vI1QAHviUeootCPkA
PYziKwIuCHGQstG4sHqLC3wTRfO9D0DHAn8nEUGxoGYL6NS/fsDTS0l0EeaKmTCm
f1RGYclwxbjTvR1H4dt8wEAeOP4kN9fYmwUYXsX3MnJ6VCkXGoBqXBpYRuCzlgQB
bRMJW5pRTHJcsJJ8nFFxYbp1DeXRvfuXAbD2aU1Ob7vmh2x/SZee6vXFzUWgt3P6
BaVoBBnToxGRAoGACQBPB7/X9CgzcZI9CP8Lh+uhZgbJv1GheFq1iZ2j6jHgGhFl
3YHKzYSKJlVyci2L+GRQ7dSxqmuA0XiLLC/66IAYNT12LoNecLH1v7DjgjcG7tIJ
0gdLVBWbwNIHx3Kt3v6Vuzd0zbHUrH2ijUWSmlm4PZScJj5AEZBSvoyNS1ECgYAJ
R5saP5aJeR2ekvtGFc7jdEt6Xkgmtz2t8Lbpa8XHVWUH2F0DiVRVgBHkYHIY1SNO
18EB1TOsCkJWJj2sWyJZBbppBdobfjfx8/6pK2xwmKgaqzUsd0cKGY27bkXl2a42
16+9G/Q5QlvTY6C2CLuy5TYQ+20OxqLjMxkSvdci8Q==
'),
                                                    array('_use' => 'encryption', '__v' => 'privatekey'),
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
                                                    '__v' => 'MIIEejCCA2OgAwIBAgIBADANBgkqhkiG9w0BAQQFADCBijELMAkGA1UEBhMCWFgx
DjAMBgNVBAgTBVN0YXRlMRYwFAYDVQQHEw1Tb21ld2hlcmVDaXR5MQ8wDQYDVQQK
EwZNeVNlbGYxETAPBgNVBAsTCFdoYXRldmVyMQ8wDQYDVQQDEwZteVNlbGYxHjAc
BgkqhkiG9w0BCQEWD3VzZXJAZG9tYWluLmNvbTAeFw0xMDExMTQxMjExNTlaFw0x
MTExMTQxMjExNTlaMIGKMQswCQYDVQQGEwJYWDEOMAwGA1UECBMFU3RhdGUxFjAU
BgNVBAcTDVNvbWV3aGVyZUNpdHkxDzANBgNVBAoTBk15U2VsZjERMA8GA1UECxMI
V2hhdGV2ZXIxDzANBgNVBAMTBm15U2VsZjEeMBwGCSqGSIb3DQEJARYPdXNlckBk
b21haW4uY29tMIIBITANBgkqhkiG9w0BAQEFAAOCAQ4AMIIBCQKCAQAAqy8WhGwx
wupZOTt88F9BzqcgD/Hu8SukmerGhLhKMWtx46AASFv8VPP4Sg46JhUYy8uuyR7u
rLxYCLdxw/Fqbkfg50nI2zDhZ6Lz6Pm/ktqGLNAhD0x0em0Wd6C9236SnHD6HJqu
Od8V+Lpus+5tGZ4XjanJ00g/zwubAGCd0KCufI8AG4Y90dDoONhD/2NLDHlldqDS
3Lkel5ntsK8GQq+cP/UpDuCtXOq8PlCONO5iY+ImeXPUqjqOHCviWlOO5l/CJQBq
5KbnixJtTwzcS8SILSTlQQXN2ttgqeIq065mcWU2IgV/13PHA0kQXr6f+tGOL6lj
giafVct54soLAgMBAAGjgeowgecwHQYDVR0OBBYEFG3IFoG/BRuLzId5gFD8VAkV
yuHjMIG3BgNVHSMEga8wgayAFG3IFoG/BRuLzId5gFD8VAkVyuHjoYGQpIGNMIGK
MQswCQYDVQQGEwJYWDEOMAwGA1UECBMFU3RhdGUxFjAUBgNVBAcTDVNvbWV3aGVy
ZUNpdHkxDzANBgNVBAoTBk15U2VsZjERMA8GA1UECxMIV2hhdGV2ZXIxDzANBgNV
BAMTBm15U2VsZjEeMBwGCSqGSIb3DQEJARYPdXNlckBkb21haW4uY29tggEAMAwG
A1UdEwQFMAMBAf8wDQYJKoZIhvcNAQEEBQADggEAAGDKk3RddljEho9Zga8oskAv
jW3DzLV3xIdK6kzcPV39ehnIb9ZVIYXV9dVlryHMD6IqC7qaVIDymNsABRkuFtEU
FxMV6a1K5UA4nz9BUiyi0HYOFTmL94mt7t2IHIubtAyta+5PSk3iIq8HJK8fBqeK
j83D3rS48gmqP3x0JzSIgaU8WMIa9YBLOSxqtUzvaz4OZFFDL5TAbgfes44l9urm
kc0d07XVn1kOhdHM0J8OHPDcfHwwrJO+mwEmuIT/2SKuO4fo0bnH9KYuI/nGPaaV
TH8SNuXGPETk/89+QEWGZvFVkg5iQWNeoO38xph7VYkjCpN7W0URHkBilXPNOA==
',
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
                                                    '__v' => 'MIIDKDCCApGgAwIBAgIDC2+pMA0GCSqGSIb3DQEBBQUAME4xCzAJBgNVBAYTAlVTMRAwDgYDVQQKEwdFcXVpZmF4MS0wKwYDVQQLEyRFcXVpZmF4IFNlY3VyZSBDZXJ0aWZpY2F0ZSBBdXRob3JpdHkwHhcNMDkwNjEwMTExODQyWhcNMTEwNjEyMDAxNDQyWjCBsjELMAkGA1UEBhMCREsxFDASBgNVBAoTC3dheWYuaWhrLmRrMRMwEQYDVQQLEwpHVDE1NDkxMTk4MTEwLwYDVQQLEyhTZWUgd3d3Lmdlb3RydXN0LmNvbS9yZXNvdXJjZXMvY3BzIChjKTA5MS8wLQYDVQQLEyZEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQgLSBRdWlja1NTTChSKTEUMBIGA1UEAxMLd2F5Zi5paGsuZGswgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAO43CHd9vb+xiWO2UntCMF7MVqgltz/kk1NQYnuKj2PiPxHsJwNXOgbqTe4W1JpRX1jIp3AIHVzrcnqghCcHkrOLfmQTAWsOlD88NCpzPaoCppqf+khTprKVbGkK2Ok1IlDDxBylLXvHLVtVLTX9XdVmcCUFsvYCtKBW0wf4gwmVAgMBAAGjga4wgaswDgYDVR0PAQH/BAQDAgTwMB0GA1UdDgQWBBRuJy91O31/CfnFJYcyHrwiJuohwjA6BgNVHR8EMzAxMC+gLaArhilodHRwOi8vY3JsLmdlb3RydXN0LmNvbS9jcmxzL3NlY3VyZWNhLmNybDAfBgNVHSMEGDAWgBRI5mj5K9KylddH2CMgEE8zmJCf1DAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwDQYJKoZIhvcNAQEFBQADgYEAntCwaCl6P7tDcnIRyJU4XoZUZcfR7f+2Z3ABBNRQvvk74SAhmNeDFO+rfEUWhD+iJo9eA3mqUNMkjV1y4Yqmz3nyqFVl7siX3MHStcVkXUAbmTHUnWApw/OFcxx1ClBGjLQDVxiBX5Xc+Zy0ye5Ip49qLyxKTY+zVkh4zrzJItg=',
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
                                '_WantAssertionsSigned' => 'true',
                                'md:Extensions' => array(
                                    'mdattr:EntityAttributes' => array(
                                        'saml:Attribute' => array(
                                            array(
                                                '_Name' => 'corto:privatekey',
                                                'saml:AttributeValue' => array(
                                                    array('_use' => 'signing', '__v' => 'MIIEnQIBAAKCAQAA1H4O7YxF5wNnIACnSMISLmFtJACV7ued2LOVPfI/B109C1Iv
XPx9qlMGZ7TbFZIWJXCw65SRfboS2wh3QZ8acrCwjtnOgrnMXRbPEr7jfm0vgQnn
lzpZB0i4FkyFvyYzDSqcLTz9+xC7psHjA5umY+zaRa1prrvWoswKFszQsnjpi8Fm
TSky5FvoSj8dz4+YfRwLBxKuTp8LqMqLBn1HrUcQvU3ikFMJnwHpAAKndZBeUwUd
UxmFXxmMHsxTjFfiLGVsqViTYRi0xRRV4INCf982MGnSu8y/0ZkGpDUEJiLJyc7N
l84rLCOJx6NKnqd6l58v9zhj6J0dBPQv++6HAgMBAAECgf9tN8HKfT/spkYaH9vb
vMyFhFQJnjdyTSBHor5B0cJtsZHPwNVRUQHySqxPH5k/9A9n/Q0ieQFzAvHwHODX
HMUGUCTft7m6XW9aJYAXnX/mmo5BH+smQrpB0TG1XG2eOy8gRFdztRbCNe6Nnrhl
QVp7n+Ds0V4xjqCamo9Q+sMF+b0V7ZakIdmNx+onJhFELybEw4tsYueMIU6Xpgbi
qtc26LNdd43CSuM7O+s8wOF0iqoO/mW97dWgxsdBj78x1gO8wMV86126+Q8eV4Fx
NB/cCxrwaKTVWxMcYHM3oBsMsWHePdyxeBWZhGA7N4cw1t+1Eh8IQsZXP8XeaXaC
ZzkCgYAO2QoOOHwQ+9VTgw5M7yVViojGerC3ufskxHlPtBXV1d3ZqOFa1tD8yjmq
658Jeh8//fQ/jcjbNeBykZUhlKSr2B/sPLPat9XCjYfoaZvFZgDIKPtrHTrapMAa
e/Y/R5AOTM27GYg3gYLVkNG0433mrlb46n1qurxJ7kPLyKnWLQKBgA5PtZQq2O0g
YEV15HpeMTwD/9Kh9jrxx6ZOUnEhbaCsjRq3sawVqpWgTN4DIHMwzpxTEreCuWdM
uzozwRW5AMmwfJEf/ImrngLKRl7GZKoIbBFlv6Y2/z90A2KAX6QrlUtBgPRNKCM8
coSEsa/K24x0J+P9H2HUegwlbZpVR5wDAoGAAXZ+2CHWj3HQddbuvMO/IOtySGPk
L2XiiZ/V9/VdRWE5520NLv8FPjLKdb2bQLrIg2yI+Q4GIRrwzzjqwZE8nDXCB2t/
qOf95po9LrfhAhTntNDc3JPXrZ0X1EQsYdWyKsaEao+8bQOUmWgYUUMsr2Kz7Phl
fPODA6G3Ckft+80CgYAGTog1iIBaV2c1lROf/Xxy90w4tZk+NqiGGIPqSRH3ubLh
MEyDCnVHRQI64GPff4W9jDp2VoyAAmeL6ZzQhtvbBgSPK+ptfQzALAXA5GseJ2IA
dLd1d00a2HRZZzs+rNo49N/wSURD6vKIhbWMQ7hm+BVQOo8m3K0AR0o6thQ9owKB
gAP1d86vWz79QiNeNYhH2EuPCYZjNPreq2IUfToIJx02OA3qoZAv6HdyFRATdQ2i
zcnEq7or8y9LAPmLqLfMWCnCDLS8nb+EsIO3xA03UDq0USAe+nnvwCJTQxgP8ypx
pKQ+xQF7edbfGUNwK72pZ5Ag3Yq+GwFKV0lxJ1zFUsyo
'),
                                                    array('_use' => 'encryption', '__v' => 'privatekey'),
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
                                                    '__v' => 'MIIEejCCA2OgAwIBAgIBADANBgkqhkiG9w0BAQQFADCBijELMAkGA1UEBhMCWFgx
DjAMBgNVBAgTBVN0YXRlMRYwFAYDVQQHEw1Tb21ld2hlcmVDaXR5MQ8wDQYDVQQK
EwZNeVNlbGYxETAPBgNVBAsTCFdoYXRldmVyMQ8wDQYDVQQDEwZteVNlbGYxHjAc
BgkqhkiG9w0BCQEWD3VzZXJAZG9tYWluLmNvbTAeFw0xMDExMTQxMjEyMDBaFw0x
MTExMTQxMjEyMDBaMIGKMQswCQYDVQQGEwJYWDEOMAwGA1UECBMFU3RhdGUxFjAU
BgNVBAcTDVNvbWV3aGVyZUNpdHkxDzANBgNVBAoTBk15U2VsZjERMA8GA1UECxMI
V2hhdGV2ZXIxDzANBgNVBAMTBm15U2VsZjEeMBwGCSqGSIb3DQEJARYPdXNlckBk
b21haW4uY29tMIIBITANBgkqhkiG9w0BAQEFAAOCAQ4AMIIBCQKCAQAA1H4O7YxF
5wNnIACnSMISLmFtJACV7ued2LOVPfI/B109C1IvXPx9qlMGZ7TbFZIWJXCw65SR
fboS2wh3QZ8acrCwjtnOgrnMXRbPEr7jfm0vgQnnlzpZB0i4FkyFvyYzDSqcLTz9
+xC7psHjA5umY+zaRa1prrvWoswKFszQsnjpi8FmTSky5FvoSj8dz4+YfRwLBxKu
Tp8LqMqLBn1HrUcQvU3ikFMJnwHpAAKndZBeUwUdUxmFXxmMHsxTjFfiLGVsqViT
YRi0xRRV4INCf982MGnSu8y/0ZkGpDUEJiLJyc7Nl84rLCOJx6NKnqd6l58v9zhj
6J0dBPQv++6HAgMBAAGjgeowgecwHQYDVR0OBBYEFG2w0LQtSHzSET6qRJDkltz3
pOcpMIG3BgNVHSMEga8wgayAFG2w0LQtSHzSET6qRJDkltz3pOcpoYGQpIGNMIGK
MQswCQYDVQQGEwJYWDEOMAwGA1UECBMFU3RhdGUxFjAUBgNVBAcTDVNvbWV3aGVy
ZUNpdHkxDzANBgNVBAoTBk15U2VsZjERMA8GA1UECxMIV2hhdGV2ZXIxDzANBgNV
BAMTBm15U2VsZjEeMBwGCSqGSIb3DQEJARYPdXNlckBkb21haW4uY29tggEAMAwG
A1UdEwQFMAMBAf8wDQYJKoZIhvcNAQEEBQADggEAAC6m/gtyX9icy7pj9HAbs244
3JL3uI45FzMshQeHsTE+XgSyCl2fW6oVzyvrXFvcGB1HLk3zoMTq17Ee/ym6a8dq
3VLgO3K3jXmO8ih3JuP2MQwyqQpmb3DVvV5vvCYjzyn7ErZovIE8SB7WbqvEtvj9
lbZhmFF2NPiVnM0MCZjVJNwj/FEjtZ7tbuCdSgIa/FvJhy/mmDBZNbD935UnKdgS
2PyEVZxp4je84fqRabpLEUiyMcsFGK6Di1ym+i3uHFsoF+GaiNfmmKraxWK2EDaw
U+dHTCEN7RIICgnwR6/dPs9mowgEWfFCgoOyS8M+ad1NL0rfgtB0osY0HUvZHg==
',
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

    $metadatasources = array(
        'federations' => array(
            'testing' => array(
                'private' => array(
                    #$commonmd,
                ),
                'public' => array(
                    'php:' . dirname(__FILE__) . '/../configs/birk.meta.php',
                    'https://betawayf.wayf.dk/saml2/idp/metadata.php',
                    'http://janus-dev.test.wayf.dk/module.php/janus/exportentities.php?type[]=saml20-idp&state=prodaccepted&external=corto',
                ),
            ),
        ),
    );

    $meta->prepareMetadata($metadatasources, $metadatafile);
    if (1) {
        $md = eval(file_get_contents($metadatafile));
        foreach ($md['federations']['testing'] as $id => $entity) {
            #unset($entity['original']);
            if (nvl3($entity, 'IDP', 'corto:IDPList', 0) != 'https://wayf.wayf.dk') {
                $entities[$id] = $entity;
                continue;
            } else {
                $newid = preg_replace("/^(_HOSTED_)/", '$1/proxy', $id);


                $newentity = $entity;
               # $newentity['IDP']['corto:IDPList'] = array('_HOSTED_/wayfwayf.wayf.dk', $id);
                $newentity['IDP']['SingleSignOnService'][0]['Binding'] = 'JSON-Redirect';
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

        print "#: " . count($entities);
        $export = array('federations' => array('testing' => $entities), 'lookuptable' => array('testing' => array_merge($md['lookuptable']['testing'], $lookuptablextra)));
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
