<?php

if (!class_exists('XMLWriter')) {
    die('XMLWriter class does not exist! Please install libxml extension for php.');
}

class Corto_XmlToArray_Exception extends Exception {
}

/**
 *
 *
 * @package    Corto
 * @module     Library
 * @author     Mads Freek Petersen, <freek@ruc.dk>
 * @author     Boy Baukema, <boy@ibuildings.com>
 * @licence    MIT License, see http://www.opensource.org/licenses/mit-license.php
 * @copyright  2009-2010 WAYF.dk
 * @version    $Id:$
 * @@todo remove singulars
 */

class Corto_XmlToArray {
    const PRIVATE_KEY_PREFIX = '__';
    const TAG_NAME_KEY = '__t';
    const VALUE_KEY = '__v';
    const PLACEHOLDER_VALUE = '__placeholder__';
    const ATTRIBUTE_KEY_PREFIX = '_';
    const MAX_RECURSION_LEVEL = 50;

    /**
     * @var array All namespaces used in SAML2 messages.
     */
    protected static $_namespaces = array(
        'urn:oasis:names:tc:SAML:2.0:protocol' => 'samlp',
        'urn:oasis:names:tc:SAML:2.0:assertion' => 'saml',
        'urn:oasis:names:tc:SAML:2.0:metadata' => 'md',
        'urn:oasis:names:tc:SAML:metadata:attribute' => 'mdattr',
        'http://www.w3.org/2001/XMLSchema-instance' => 'xsi',
        'http://www.w3.org/2001/XMLSchema' => 'xs',
        'http://schemas.xmlsoap.org/soap/envelope/' => 'SOAP-ENV',
        'http://www.w3.org/2000/09/xmldsig#' => 'ds',
        'http://www.w3.org/2001/04/xmlenc#' => 'xenc',
        'corto.wayf.dk' => 'corto',
    );

    protected static $_namespacesbyprefix;
    /**
     * @var array All XML entities which are treated as single values in Corto.
     */
    protected static $_singulars;
    protected static $_singulars_list = array(
        'md:AffiliationDescriptor',
        #        'md:AttributeAuthorityDescriptor',
        #        'md:AuthnAuthorityDescriptor',
        'md:Company',
        #        'md:EntitiesDescriptor',
        #        'md:EntityDescriptor',
        'md:Extensions',
        'md:GivenName',
        #        'md:IDPSSODescriptor',
        'md:Organization',
        #        'md:PDPDescriptor',
        #        'md:RoleDescriptor',
        #        'md:SPSSODescriptor',
        'md:SurName',
        'mdattr:EntityAttributes',
        'saml:Advice',
        'saml:Assertion', #
        'saml:AssertionIDRef', #
        'saml:AssertionURIRef', #
        #        'saml:Attribute',
        #        'saml:AttributeStatement',
        'saml:Audience',
        'saml:AudienceRestriction',
        'saml:AuthnContext',
        'saml:AuthnContextClassRef',
        'saml:AuthnContextDecl',
        'saml:AuthnContextDeclRef',
        'saml:AuthnStatement', #
        #        'saml:AuthzDecisionStatement',
        'saml:BaseID',
        #        'saml:Condition',
        'saml:Conditions',
        'saml:EncryptedAssertion', #
        #        'saml:EncryptedAttribute',
        'saml:EncryptedID',
        'saml:Evidence',
        'saml:Issuer',
        'saml:NameID',
        #        'saml:OneTimeUse',
        #        'saml:ProxyRestriction',
        #        'saml:Statement',
        'saml:Subject',
        'saml:SubjectConfirmation',
        'saml:SubjectConfirmationData',
        'saml:SubjectLocality',
        'samlp:Artifact',
        'samlp:Extensions',
        'samlp:GetComplete',
        'samlp:IDPList',
        'samlp:NameIDPolicy',
        'samlp:NewEncryptedID',
        'samlp:NewID',
        'samlp:RequestedAuthnContext',
        'samlp:Scoping',
        'samlp:Status',
        'samlp:StatusCode',
        'samlp:StatusDetail',
        'samlp:StatusMessage',
        'samlp:Terminate',
        'xenc:EncryptedData',
        'ds:CanonicalizationMethod',
        'ds:DigestMethod',
        'ds:DigestValue',
        'ds:DSAKeyValue',
        'ds:KeyInfo',
        #        'ds:KeyName',
        #        'ds:KeyValue',
        #        'ds:MgmtData',
        #        'ds:PGPData',
        #        'ds:RetrievalMethod',
        'ds:RSAKeyValue',
        'ds:Signature',
        'ds:SignatureMethod',
        'ds:SignatureValue',
        'ds:SignedInfo',
        #        'ds:SPKIData',
        'ds:Transforms',
        'ds:X509Data',
        'ds:X509Certificate',
        'corto:IDPList',
    );

    public static function xml2array($xml, $topleveltag = false)
    {
        $parser = xml_parser_create();
        xml_parser_set_option($parser, XML_OPTION_CASE_FOLDING, 0);
        $parserResultStatus = xml_parse_into_struct($parser, $xml, $values);
        if ($parserResultStatus !== 1) {
            throw new Corto_XmlToArray_Exception(
                'Error parsing incoming XML. ' . PHP_EOL .
                        'Error code: ' . xml_error_string(xml_get_error_code($parser)) . PHP_EOL .
                        'Line: ' .       xml_get_current_line_number($parser) . PHP_EOL .
                        'XML: ' . $xml);
        }
        xml_parser_free($parser);
        self::$_singulars = array_fill_keys(self::$_singulars_list, 1);
        $return = self::_xml2array($values);
        if ($topleveltag) return array($return[0]['__t'] => array($return[0]));
        return $return[0];
    }

    /**
     * Convert a flat array of entities, begotten from the PHP xml_parser into a hierarchical array recursively.
     *
     * @static
     * @param array $elements
     * @param int   $level
     * @param array $namespaceMapping
     * @return array
     */

    protected static $i = 0;

    protected static function _xml2array(&$elements, $level = 1, $namespaceMapping = array())
    {
        static $defaultNs;
        if ($level == 1) {
            self::$i = 0;
            $defaultNs = '';
        }
        $newElement = array();
        while (isset($elements[self::$i]) && $value = $elements[self::$i++]) {
            if ($value['type'] == 'close') {
                return $newElement;
            } elseif ($value['type'] == 'cdata') {
                continue;
            }
            $hashedAttributes = array();
            $tagName = $value['tag'];
            if (isset($value['attributes']) && $attributes = $value['attributes']) {
                foreach ($attributes as $attributeKey => $attributeValue) {
                    unset($attributes[$attributeKey]);

                    if (preg_match("/^xmlns:(.+)$/", $attributeKey, $namespacePrefixAndTag)) {
                        if (empty(self::$_namespaces[$attributeValue])) {
                            self::$_namespaces[$attributeValue] = $namespacePrefixAndTag[1];
                        }
                        $namespaceMapping[$namespacePrefixAndTag[1]] = self::$_namespaces[$attributeValue];
                        $hashedAttributes['_xmlns:' . self::$_namespaces[$attributeValue]] = $attributeValue;
                    } elseif (preg_match("/^xmlns$/", $attributeKey)) {
                        $defaultNs = self::$_namespaces[$attributeValue];
                        $hashedAttributes['_xmlns:' . $defaultNs] = $attributeValue;
                    } else {
                        $hashedAttributes[self::ATTRIBUTE_KEY_PREFIX . $attributeKey] = $attributeValue;
                    }
                }
            }
            $complete = array();
            if (preg_match("/^(.+):(.+)$/", $tagName, $namespacePrefixAndTag)){
                if (!isset($namespaceMapping[$namespacePrefixAndTag[1]])) {
                    throw new Exception('No namespace defined for: ' . $tagName . ' currently defined are: ' . print_r($namespaceMapping, 1));
                }
                $tagName = $namespaceMapping[$namespacePrefixAndTag[1]] . ":" . $namespacePrefixAndTag[2];
            } else {
                $tagName = $defaultNs . ":" . $tagName;
            }
            $complete[self::TAG_NAME_KEY] = $tagName;
            if ($hashedAttributes) {
                $complete = array_merge($complete, $hashedAttributes);
            }
            if (isset($value['value'])) {
                $complete[self::VALUE_KEY] = $attributeValue = trim($value['value']);
            }
            if ($value['type'] == 'open') {
                $cs = self::_xml2array($elements, $level + 1, $namespaceMapping);
                foreach ($cs as $c) {
                    $tagName = $c[self::TAG_NAME_KEY];
                    unset($c[self::TAG_NAME_KEY]);
                    if (!isset(self::$_singulars[$tagName])) {
                        $complete[$tagName][] = $c;
                    } else {
                        $complete[$tagName] = $c;
                        unset($complete[$tagName][self::TAG_NAME_KEY]);
                    }
                }
            } #elseif ($value['type'] == 'complete') {
            #            }
            $newElement[] = $complete;
        }
        return $newElement;
    }

    /**
     * Convert a hash (array) to XML.
     *
     * Example:
     * hash2xml(array('book'=>array('_id'=>'1','title'=>array('__v'=>'SAML For beginners'))), 'catalog');
     * Converts to:
     * <catalog><book id='1'><title>SAML For Beginners</title></book></catalog>
     *
     * @static
     * @param array  $hash        Hash/array to convert
     * @param string $elementName Specific element to convert, if empty then the top level element is used
     * @return string XML from array
     */
    public static function array2xml(array $hash, $elementName = "", $useIndentation = false)
    {
        $writer = new XMLWriter();
        $writer->openMemory();
        $writer->startDocument('1.0');
        $writer->setIndent($useIndentation);
        $writer->setIndentString("    ");
        foreach (self::$_namespaces as $ns => $prefix) {
            self::$_namespacesbyprefix[$prefix] = $ns;
        }

        if (!$elementName) {
            if (isset($hash[self::TAG_NAME_KEY])) {
                $elementName = $hash[self::TAG_NAME_KEY];
            }
            else {
                throw new Exception("No top level tag provided or defined in hash!");
            }
        }

        self::_array2xml($hash, $elementName, $writer);

        $writer->endDocument();
        return $writer->outputMemory();
    }

    protected static function _array2xml($hash, $elementName, XMLWriter $writer, $level = 0, $visiblenamespaces = array())
    {
        if ($level > self::MAX_RECURSION_LEVEL) {
            throw new Exception('Recursion threshold exceed on element: ' . $elementName . ' for hashvalue: ' . var_export($hash, true));
        }
        if ($hash == self::PLACEHOLDER_VALUE) {
            // Ignore placeholders
            return;
        }
        if (!isset($hash[0])) {
            $writer->startElement($elementName);
        }

        // handle attributes / namespaces first
        // attribute key prefix is a prefix of private key prefix thus first
        // test for private key prefis
        foreach ((array) $hash as $key => $value) {
            if (strpos($key, self::PRIVATE_KEY_PREFIX) === 0) {
                # [__][<x>] is used for private attributes for internal consumption
            } elseif (strpos($key, self::ATTRIBUTE_KEY_PREFIX) === 0) {
                if (substr($key, 1, 6) == 'xmlns:' && nvl($visiblenamespaces, substr($key, 7))) {
                    continue;
                }
                $writer->writeAttribute(substr($key, 1), $value);
                if (substr($key, 1, 6) == 'xmlns:') {
                    $visiblenamespaces[substr($key, 7)] = true;
                }
            }
        }

        if (preg_match("/^(.+):/", $elementName, $nsprefix)) {
            if (!nvl($visiblenamespaces, $nsprefix[1])) {
                $visiblenamespaces[$nsprefix[1]] = true;
                $writer->writeAttribute('xmlns:' . $nsprefix[1], self::$_namespacesbyprefix[$nsprefix[1]]);
            }
        }
        // and then elements etc.
        foreach ((array) $hash as $key => $value) {
            if (is_int($key)) {
                // Normal numeric index, value is probably a hash structure, recurse...
                self::_array2xml($value, $elementName, $writer, $level + 1, $visiblenamespaces);
            } elseif ($key === self::VALUE_KEY) {
                $writer->text($value);
            } elseif (strpos($key, self::PRIVATE_KEY_PREFIX) === 0) {
                # [__][<x>] is used for private attributes for internal consumption
            } elseif (strpos($key, self::ATTRIBUTE_KEY_PREFIX) === 0) {
            } else {
                self::_array2xml($value, $key, $writer, $level + 1, $visiblenamespaces);
            }
        }

        if (!isset($hash[0])) {
            $writer->endElement();
        }
    }

    /**
     * Format XML, adds newlines and whitespace.
     *
     * @link http://recurser.com/articles/2007/04/05/format-xml-with-php/
     *
     * @static
     * @param string $xml Unformatted XML
     * @return string Formatted XML
     */
    public static function formatXml($xml)
    {
        // add marker linefeeds to aid the pretty-tokeniser (adds a linefeed between all tag-end boundaries)
        $xml = preg_replace('/(>)(<)(\/*)/', "$1\n$2$3", $xml);

        // now indent the tags
        $token = strtok($xml, "\n");
        $result = ''; // holds formatted version as it is built
        $pad = 0; // initial indent
        $matches = array(); // returns from preg_matches()

        // scan each line and adjust indent based on opening/closing tags
        while ($token !== false) :

            // test for the various tag states

            // 1. open and closing tags on same line - no change
            if (preg_match('/.+<\/\w[^>]*>$/', $token, $matches)) :
                $indent = 0;
                // 2. closing tag - outdent now
            elseif (preg_match('/^<\/\w/', $token, $matches)) :
                $pad--;
                // 3. opening tag - don't pad this one, only subsequent tags
            elseif (preg_match('/^<\w[^>]*[^\/]>.*$/', $token, $matches)) :
                $indent = 1;
                // 4. no indentation needed
            else :
                $indent = 0;
            endif;

            // pad the line with the required number of leading spaces
            $line = str_pad($token, strlen($token) + $pad, ' ', STR_PAD_LEFT);
            $result .= $line . "\n"; // add to the cumulative result, with linefeed
            $token = strtok($xml, "\n"); // get the next token
            $pad += $indent; // update the pad size for subsequent lines
        endwhile;

        return $result;
    }
}
