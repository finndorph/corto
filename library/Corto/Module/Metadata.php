<?php
/**
 * The Metadata.obsolete class transforms SAML standard metadata (in XML, php or json)
 * to a format suitable for use by Corto.
 *
 * It should be used when new metadata is available.
 *
 * You add metadata by calling prepareMetadata.
 *
 * The metadata file should be writable by the caller and readable by the corto webserver.
 *
 */


class Corto_Module_Metadata {

    protected static $descriptors = array('SP', 'IDP');
    protected static $services = array('AssertionConsumerService', 'ArtifactResolutionService', 'SingleSignOnService', 'SingleLogoutService');
    protected static $signings = array('WantAuthnRequestsSigned', 'WantAssertionsSigned', 'AuthnRequestsSigned', 'WantResponsesSigned');

    public function prepareMetadata($metadatasources, $metadatapath, $cortoinstance)
    {
        $md = array('public' => array(), 'private' => array(), 'remote' => array());
        foreach ($metadatasources as $source) {
            list($type, $tmpmd) = self::retrieveMetadata($source);
            //$md[$type] = self::merge($md[$type], $tmpmd);
            $md[$type][] = $tmpmd;
        }

        $mdprefix = $metadatapath . $cortoinstance . '.';
        $publicmdfile = $mdprefix . 'public.metadata.php';
        $optimizedmdfile = $mdprefix . 'optimized.metadata.php';

        // if (!($publicmdfile && $optimizedmdfile)) die("Can't export to $mdprefix" . "$cortoinstance...\n");
        
		foreach ($md['public'] as $key => $tmpmd) {
			if ($entitymd = nvl($tmpmd, 'md:EntityDescriptor')) {
            	$md['public'][$key] = array('md:EntitiesDescriptor' => $tmpmd);
        	}
		}

		foreach ($md['public'] as $tmpmd) {
        	foreach ((array) $tmpmd['md:EntitiesDescriptor'] as $entitiesDescriptor) {
            	foreach ((array) $entitiesDescriptor['md:EntityDescriptor'] as $entityDescriptor) {
                	$public[$entityDescriptor['_entityID']] = $entityDescriptor;
            	}
        	}
        }

        unset($public['_COMMON_']);

        file_put_contents($publicmdfile . '.tmp', "<?php\nreturn " . var_export($public, true) . ";");
        @rename($publicmdfile . '.tmp', $publicmdfile);

        print "Exporting $publicmdfile\n";

		$optimized = null;
		
		foreach ($md['public'] as $tmpmd) {
			// Ommit the $optimized param. Only used with _COMMON_ metadata
        		$optimized = self::merge($optimized, self::optimizeMetaData('public', array('public' => $tmpmd)));
		}
		
		foreach ($md['private'] as $tmpmd) {
			$optimized = self::merge($optimized, self::optimizeMetaData('private', array('private' => $tmpmd)));
		}
		
        $url2service = self::prepareLookuptables($optimized);

		foreach ($md['remote'] AS $tmpmd) {
        	$optimized = self::merge($optimized, self::optimizeMetaData('remote', array('remote' => $tmpmd)));
		}
		
        $export = array('md' => $optimized, 'lookuptable' => $url2service);
        file_put_contents($optimizedmdfile . '.tmp', "<?php\nreturn " . var_export($export, true) . ";");
        @rename($optimizedmdfile . '.tmp', $optimizedmdfile);
        print "Exporting $optimizedmdfile\n";
    }

    protected static function retrieveMetadata($mdspec)
    {
        $type = 'public';
        $format = 'xml';
        if (is_array($mdspec)) {
            $type = 'private';
            $format = 'array';
        } elseif (preg_match("/^(private|public|remote):(xml|php|json|array):(.*)/", $mdspec, $dollar)) {
            list($dummy, $type, $format, $source) = $dollar;
        }

        print "Importing $mdspec\n";

        switch ($format) {
            case 'xml':
                $res = Corto_XmlToArray::xml2array(file_get_contents($source), true);
                break;
            case 'php':
                // the included file must return an array
                $res = include $source;
                break;
            case 'json':
                $res = json_decode(file_get_contents($source), 1);
                break;
            case 'array':
                $res = $mdspec;
                break;
        }
        return array($type, $res);
    }

    protected static function optimizeMetaData($type, $md, $optimized = array())
    {
        // @note remember not to set keys for things that might be overidden by merged md
        // ie. set ['saveSLOInfo'] to true, but do not set the ['saveSLOInfo'] at all
        // when false as it WILL overwrite the true !!!
        $meta = array();
        $rawmeta = $md[$type];
        $commonmd = self::merge(nvl($optimized, '_COMMON_'), nvl($rawmeta, '_COMMON_'));
        unset($rawmeta['_COMMON_']);

        if ($entitymd = nvl($rawmeta, 'md:EntityDescriptor')) {
            $rawmeta['md:EntitiesDescriptor'] = array(
                array(
                    'md:EntityDescriptor' => $entitymd,
                ),
            );
            unset($rawmeta['md:EntityDescriptor']);
        }

        foreach ((array) nvl($rawmeta, 'md:EntitiesDescriptor') as $entitiesDescriptor) {
            $entitiescommon = array();
            if (isset($entitiesDescriptor['md:Extensions']['mdattr:EntityAttributes']['saml:Attribute'])) {
                foreach ((array) $entitiesDescriptor['md:Extensions']['mdattr:EntityAttributes']['saml:Attribute'] as $attribute) {
                    foreach ((array) $attribute['saml:AttributeValue'] as $attributeValue) {
                        $entitiescommon[$attribute['_Name']][] = $attributeValue;
                    }
                }
            }

            $entitiescommon = self::merge($commonmd, $entitiescommon);

            foreach ((array) $entitiesDescriptor['md:EntityDescriptor'] as $entityDescriptor) {
                if (empty($entityDescriptor['_entityID'])) $entityDescriptor['_entityID'] = '_COMMON_';
                $cortoEntityDescriptor = array();
                $cortoEntityDescriptor['entityID'] = $entityDescriptor['_entityID'];

                foreach ((array) nvl3($entityDescriptor, 'md:Extensions', 'mdattr:EntityAttributes', 'saml:Attribute') as $attribute) {
                    foreach ((array) $attribute['saml:AttributeValue'] as $attributeValue) {
                        $cortoEntityDescriptor[$attribute['_Name']][] = $attributeValue;
                    }
                }

                foreach ((array) nvl($entityDescriptor, 'md:IDPSSODescriptor') as $idpsso) {
                    foreach (array('SingleSignOnService', 'SingleLogoutService') as $service) {
                        foreach ((array) nvl($idpsso, 'md:' . $service) as $sso) {
                            $cortoEntityDescriptor['IDP'][$service][] = array(
                                'Location' => $sso['_Location'],
                                'Binding' => $sso['_Binding'],
                            );
                        }
                    }

                    // metadata overrides auto setting
                    if (empty($cortoEntityDescriptor['IDP']['saveSLOInfo'])
                            && $saveSLOInfo = (boolean) nvl2($cortoEntityDescriptor, 'IDP', 'SingleLogoutService')) {
                        $cortoEntityDescriptor['IDP']['saveSLOInfo'] = $saveSLOInfo;
                    }
                }


                foreach ((array) nvl($entityDescriptor, 'md:SPSSODescriptor') as $spsso) {
                    foreach (array('AssertionConsumerService', 'SingleLogoutService') as $service) {
                        foreach ((array) nvl($spsso, 'md:' . $service) as $acs) {
                            $cortoEntityDescriptor['SP'][$service][$acs['_index']] = array(
                                'Location' => $acs['_Location'],
                                'Binding' => $acs['_Binding'],
                                'isDefault' => empty($acs['_isDefault']) ? null : $acs['_isDefault'],
                            );
                        }
                    }

                    // metadata overrides auto setting
                    if (empty($cortoEntityDescriptor['SP']['saveSLOInfo'])
                            && $saveSLOInfo = (boolean) nvl2($cortoEntityDescriptor, 'SP', 'SingleLogoutService')) {
                        $cortoEntityDescriptor['SP']['saveSLOInfo'] = $saveSLOInfo;
                    }
                }

                // this is the default resolution algorithm from Meta 2.2.3
                if (isset($cortoEntityDescriptor['SP']['AssertionConsumerService'])) {
                    $acslist = &$cortoEntityDescriptor['SP']['AssertionConsumerService'];
                    ksort($acslist);
                    $default = null;
                    foreach ((array) $acslist as $index => $acs) {
                        if ($acs['isDefault']) {
                            $default = $index;
                        }
                    }
                    $cortoEntityDescriptor['SP']['AssertionConsumerService']['default']
                            = $default ? $default : min(array_keys($acslist));
                }

                foreach (self::$descriptors as $descriptor) {
                    foreach ((array) nvl($entityDescriptor, 'md:' . $descriptor . 'SSODescriptor') as $idporsp) {
                        foreach (self::$signings as $signing) {
                            if (isset($idporsp['_' . $signing])) {
                                $cortoEntityDescriptor[$descriptor][$signing] =
                                        ($idporsp['_' . $signing] == 'true' || $idporsp['_' . $signing] == '1');
                            }
                        }

                        foreach ((array) nvl3($idporsp, 'md:Extensions', 'mdattr:EntityAttributes', 'saml:Attribute') as $attribute) {
                            #print_r($attribute);
                            foreach ((array) $attribute['saml:AttributeValue'] as $attributeValue) {
                                foreach ($attributeValue as $value) {
                                    #print_r($value);
                                    $cortoEntityDescriptor[$descriptor][$attribute['_Name']][] = $value;
                                }
                            }
                        }
                        foreach ((array) nvl($idporsp, 'md:KeyDescriptor') as $keyDescriptor) {
                            $use = nvl($keyDescriptor, '_use', 'signing');
                            if (isset($keyDescriptor['ds:KeyInfo']['ds:X509Data'])) {
                                $cortoEntityDescriptor[$descriptor][$use]['X509Certificate'] =
                                        $keyDescriptor['ds:KeyInfo']['ds:X509Data']['ds:X509Certificate']['__v'];
                            } elseif (isset($keyDescriptor['ds:KeyInfo']['ds:KeyName'])) {
                                $cortoEntityDescriptor[$descriptor][$use]['KeyName'] =
                                        $keyDescriptor['ds:KeyInfo']['ds:KeyName']['__v'];

                            }
                            /*                               $cortoEntityDescriptor[$descriptor][$keyDescriptor['_use']]['KeyName'] =
                            $keyDescriptor['ds:KeyInfo']['ds:X509Data']['ds:KeyName']['__v'];
                            */
                        }

                        foreach ((array) nvl($cortoEntityDescriptor[$descriptor], 'corto:privatekey') as $privatekey) {
                            $cortoEntityDescriptor[$descriptor][$privatekey['_use']]['X509Privatekey'] = $privatekey['__v'];
                        }
                        unset($cortoEntityDescriptor[$descriptor]['corto:privatekey']);

                        $cortoEntityDescriptor[$descriptor] = self::merge(nvl($entitiescommon, $descriptor), nvl($cortoEntityDescriptor, $descriptor));
                        #unset($common[$descriptor]);
                    }
                }
                $meta[$entityDescriptor['_entityID']] = self::merge($entitiescommon, $cortoEntityDescriptor);
            }
        }
        return $meta;
    }

    protected static function prepareLookuptables($metadata)
    {
        $url2meta = array();

        foreach ($metadata as $id => $entity) {
            $sourceid = sha1($id);
            foreach (self::$descriptors as $descriptor) {
                foreach (self::$services as $service) {
                    if (isset($entity[$descriptor][$service])) {
                        foreach ((array) $entity[$descriptor][$service] as $index => $theservice) {
                            if (!is_int($index)) continue;
# multiple bindings per url are NOT allowed! flag it here ...
# should $theservice['_Location'] be hashed ?
                            $url2meta[$theservice['Location']] = array(
                                'EntityID' => $id,
                                'Service' => $service,
                                'Binding' => $theservice['Binding'],
                            );
                            if ($theservice['Binding'] == 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact') {
                                $url2meta[$sourceid][$index] = $theservice['Location'];
                            }
                        }
                    }
                }
                /**
                 * This is the entry for the metadataservice.
                 * The entityID is the url so ProxyServer::getParametersFromUrl
                 * fills in the rest
                 *
                 */
                $url2meta[$id] = true;

            }
        }
        return $url2meta;
    }

    private static function merge($a, $b)
    {
        if (is_null($a)) $a = array();
        foreach ((array) $b as $k => $v) {
            if (is_array($v)) {
                if (!isset($a[$k])) {
                    $a[$k] = $v;
                } else {
                    $a[$k] = self::merge($a[$k], $v);
                }
            } else {
                $a[$k] = $v;
            }
        }
        return $a;
    }
}
