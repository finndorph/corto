<?php
/**
 * Created by PhpStorm.
 * User: freek
 * Date: Sep 5, 2010
 * Time: 10:50:05 PM
 * To change this template use File | Settings | File Templates.
 */

require_once 'Interface.php';

class Corto_Metadata_Standard implements Corto_Metadata_Interface {

    protected static $descriptors = array('SP', 'IDP');
    protected static $services = array('AssertionConsumerService', 'ArtifactResolutionService', 'SingleSignOnService');
    protected static $signings = array('WantAuthnRequestsSigned', 'WantAssertionsSigned', 'AuthnRequestsSigned');

    protected $_corto_metadatafile = "../configs/corto_metadata.php";
    protected $_corto_url2metadatafile = "../configs/corto_url2metadata.php";
    protected $_metadata = array();
    protected $_metadatasources = array();
    protected $_reassemblemetadata = true;
    protected $_corto;

    public function addMetadataToFederation($source, $federation = '_default_')
    {
        $thefile = realpath($source);
        $this->_metadatasources[$federation][] = $thefile;
        // we silently ignore non-existant files
        if ($sourcetime = @filemtime($thefile)) {
            $metadatatime = @filemtime(realpath($this->_corto_metadata));
            $this->_reassemblemetadata = $this->_reassemblemetadata
                    || !$metadatatime
                    || ($sourcetime > $metadatatime);
        }
    }

    public function getMetadata()
    {
        if ($this->_reassemblemetadata) {
            foreach ($this->_metadatasources as $federation => $feds) {
                foreach ($feds as $source) {
                    $pi = pathinfo(realpath($source));
                    switch ($pi['extension']) {
                        case 'xml':
                            $metadata = Corto_XmlToArray::xml2array(file_get_contents($source));
                            break;
                        case 'php':
                            // the included file must return an array
                            $metadata = include $source;
                            break;
                        case 'json':
                            $metadata = json_decode(file_get_contents($source), 1);
                            break;
                    }
                    $md = self::optimizeMetaData($metadata, $federation);
                    if (empty($this->_metadata[$federation])) $this->_metadata[$federation] = array();
                    $this->_metadata[$federation] = self::merge($this->_metadata[$federation], $md);
                }
            }
            #file_put_contents($this->_corto_metadatafile . '.tmp', "<?php\nreturn " . var_export($this->_metadata, true) . ";");
            file_put_contents($this->_corto_metadatafile . '.tmp', 'return ' . var_export($this->_metadata, true) . ";");
            @rename($this->_corto_metadatafile . '.tmp', $this->_corto_metadatafile);
            #file_put_contents($this->_corto_url2metadatafile . '.tmp', "<?php\nreturn " . var_export($this->prepareLookuptables(), true) . ";");
            file_put_contents($this->_corto_url2metadatafile . '.tmp', 'return ' . var_export($this->prepareLookuptables(), true) . ";");
            @rename($this->_corto_url2metadatafile . '.tmp', $this->_corto_url2metadatafile);
        }
        /**
         * This is to allow the default metadata to be independent of the location of corto
         * Replaces _HOSTED_ with the actual location
         */
        $this->_corto = join("/", array_slice(explode("/", 'http' . (nvl($_SERVER, 'HTTPS') ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME']), 0, -1));
        $metadatadata = file_get_contents($this->_corto_metadatafile);
        $metadatadata = str_replace('_HOSTED_', $this->_corto, $metadatadata);
        #return include 'data:text/plain,' . $metadatadata;
        return eval($metadatadata);
    }

    public function getUrl2Metadata()
    {
        $url2metadatadata = file_get_contents($this->_corto_url2metadatafile);
        $url2metadatadata = str_replace('_HOSTED_', $this->_corto, $url2metadatadata);
        #return include 'data:text/plain,' . $url2metadatadata;
        return eval($url2metadatadata);
    }

    protected static function optimizeMetaData($rawmeta, $federation)
    {
        foreach ((array) $rawmeta['md:EntityDescriptor'] as $entityDescriptor) {
            $cortoEntityDescriptor = array();
            $cortoEntityDescriptor['entityID'] = $entityDescriptor['_entityID'];
            $cortoEntityDescriptor['federation'] = $federation;

            if (isset($entityDescriptor['md:IDPSSODescriptor']))
                foreach ((array) $entityDescriptor['md:IDPSSODescriptor'] as $idpsso) {
                    foreach ($idpsso['md:SingleSignOnService'] as $sso) {
                        $cortoEntityDescriptor['IDP']['SingleSignOnService'][] = array(
                            'Location' => $sso['_Location'],
                            'Binding' => $sso['_Binding'],
                        );
                    }
                }
            if (isset($entityDescriptor['md:SPSSODescriptor']))
                foreach ((array) $entityDescriptor['md:SPSSODescriptor'] as $spsso) {
                    foreach ((array) $spsso['md:AssertionConsumerService'] as $acs) {
                        $cortoEntityDescriptor['SP']['AssertionConsumerService'][$acs['_index']] = array(
                            'Location' => $acs['_Location'],
                            'Binding' => $acs['_Binding'],
                            'isDefault' => empty($acs['_isDefault']) ? null : $acs['_isDefault'],
                        );
                    }
                }

            // this is the default resolution algorithm from Meta 2.2.3
            if (isset($cortoEntityDescriptor['SP']['AssertionConsumerService'])) {
                $acslist = &$cortoEntityDescriptor['SP']['AssertionConsumerService'];
                ksort($acslist);
                $default = null;
                foreach ((array) $acslist as $index => $acs) {
                    if (!$default) $default = $index;
                    if ($acs['isDefault']) {
                        $default = $index;
                        break;
                    }
                    if ($acs['isDefault'] === false) unset($default);
                }
                $cortoEntityDescriptor['SP']['AssertionConsumerService']['default']
                        = $default ? $default : min(array_keys($acslist));
            }
            foreach (self::$descriptors as $descriptor) {
                if (isset($entityDescriptor['md:' . $descriptor . 'SSODescriptor']))
                    foreach ((array) $entityDescriptor['md:' . $descriptor . 'SSODescriptor'] as $idporsp) {
                        foreach (self::$signings as $signing) {
                            $cortoEntityDescriptor[$descriptor][$signing] =
                                    isset($idporsp['_' . $signing])
                                            && ($idporsp['_' . $signing] == 'true' || $idporsp['_' . $signing] == '1');

                        }

                        if (isset($idporsp['md:Extensions']['saml:Attribute']))
                            foreach ((array) $idporsp['md:Extensions']['saml:Attribute'] as $attribute) {
                                foreach ((array) $attribute['saml:AttributeValue'] as $attributeValue) {
                                    $cortoEntityDescriptor[$descriptor][$attribute['_Name']][] = $attributeValue['__v'];
                                }
                            }
                        if (isset($idporsp['md:KeyDescriptor']))
                            foreach ((array) $idporsp['md:KeyDescriptor'] as $keyDescriptor) {
                                $cortoEntityDescriptor[$descriptor][$keyDescriptor['_use']]['X509Certificate'] =
                                        $keyDescriptor['ds:KeyInfo']['ds:X509Data']['ds:X509Certificate']['__v'];
                                $cortoEntityDescriptor[$descriptor][$keyDescriptor['_use']]['KeyName'] =
                                        $keyDescriptor['ds:KeyInfo']['ds:X509Data']['ds:KeyName']['__v'];
                            }
                    }
            }

            $meta[$entityDescriptor['_entityID']] = $cortoEntityDescriptor;
        }
        return $meta;
    }

    protected function prepareLookuptables()
    {
        $url2meta = array();
        foreach ($this->_metadata as $federation => $federationmetadata) {
            foreach ($federationmetadata as $id => $entity) {
                foreach (self::$descriptors as $descriptor) {
                    foreach (self::$services as $service) {
                        if (isset($entity[$descriptor][$service]))
                            foreach ((array) $entity[$descriptor][$service] as $index => $theservice) {
                                if (!is_int($index)) continue;
                                # multiple bindings per url are NOT allowed! flag it here ...
                                # should $theservice['_Location'] be hashed ?
                                $url2meta[$federation][$theservice['Location']] = array(
                                    'EntityID' => $id,
                                    'Service' => $service,
                                    'Binding' => $theservice['Binding'],
                                );
                            }
                    }
                }
            }
        }
        return $url2meta;
    }

    protected static function merge($a, $b)
    {
        foreach ($b as $k => $v) {
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