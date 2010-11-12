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
    
    $metadatasources = array(
        'federations' => array(
            'testing' => array(
                'public' => array(
                    'php:' . dirname(__FILE__) . '/../configs/birk.meta.php',
                    'http://janus-dev.test.wayf.dk/module.php/janus/exportentities.php?type[]=saml20-idp&state=prodaccepted&external=corto',
                ),
            ),
        ),
    );

    $meta->prepareMetadata($metadatasources, $metadatafile);

    $md = eval(file_get_contents($metadatafile));
    foreach ($md['federations']['testing'] as $id => $entity) {
        #unset($entity['original']);
        if (nvl3($entity, 'IDP', 'corto:IDPList', 0) != 'https://wayf.wayf.dk') {
            $entities[$id] = $entity;
            continue;
        } else {
            $newid = preg_replace("/^(_HOSTED_)/", '$1/proxy', $id);
            $entity['corto:sharedkey'] = array(
                array('__v' => 'abrakadabra'),
            );
            $newentity = $entity;
            $newentity['IDP']['corto:IDPList'] = array('_HOSTED_/wayf.wayf.dk', $id);
            $newentity['entityID'] = $newid;
            $sso = nvl3($newentity['IDP'], 'SingleSignOnService', 0, 'Location');

            $asc = $sso . "/ACS";
            $entity['SP'] = array(
                'AssertionConsumerService' =>
                array(
                    1 =>
                    array(
                        'Location' => $asc,
                        'Binding' => 'JSON-Redirect',
                    ),
                    'default' => 1,
                ),
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
            $entities[$id] = $entity;
        }
    }
    $export = array('federations' => array('testing' => $entities), 'lookuptable' => array('testing' => array_merge($md['lookuptable']['testing'], $lookuptablextra)));
    if ($really) {
        file_put_contents($metadatafile . '.tmp', "return " . var_export($export, true) . ";");
        @rename($metadatafile . '.tmp', $metadatafile);
        print "metadata written to: ";
        system("ls -l $metadatafile");
    } else {
        print_r($export);
    }
}
