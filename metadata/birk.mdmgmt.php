<?php
error_reporting(E_ALL);

$really = in_array('--really', $argv);

require dirname(__FILE__) . '/../library/Corto/cortolib.php';
require dirname(__FILE__) . '/../library/Corto/XmlToArray.php';
require dirname(__FILE__) . '/../library/Corto/Module/Metadata.php';

$metadatafile = dirname(__FILE__) . '/birk_optimized_metadata.php';

preparemetadataforbirk($metadatafile);

function preparemetadataforbirk($metadatafile)
{
    $meta = new Corto_Module_Metadata();

    $janusconfig = array(
        'test' => array(
            'md' => 'https://janus.wayf.dk/module.php/janus/exportentities.php?type[]=saml20-idp&state=testaccepted&external=corto-test',
            'wayf' => 'https://testidp.wayf.dk',
        ),
        'qa' => array(
            'md' => 'https://janus.wayf.dk/module.php/janus/exportentities.php?type[]=saml20-idp&state=QA&external=corto-qa',
            'wayf' => 'https://betawayf.wayf.dk',
        ),
        'prod' => array(
            'md' => 'https://janus.wayf.dk/module.php/janus/exportentities.php?type[]=saml20-idp&state=prodaccepted&external=corto-prod',
            'wayf' => 'https://wayf.wayf.dk',
        ),
        'sp' => array(
            'md' => 'https://janus.wayf.dk/module.php/janus/exportentities.php?type[]=saml20-sp&state=birk&external=corto-sp',
            'wayf' => 'https://betawayf.wayf.dk',
        ),
        'proxy-sp' => array(
            'md' => 'https://janus.wayf.dk/module.php/janus/exportentities.php?type[]=saml20-sp&state=QA&external=corto-proxy-sp',
            'wayf' => 'https://betawayf.wayf.dk',
        ),
    );


    $testqaprod = 'qa';

    $metadatasources = array(
        'public:xml:' . $janusconfig[$testqaprod]['md'],
        'private:xml:' . $janusconfig['sp']['md'],
        'private:xml:' . $janusconfig['proxy-sp']['md'],
        'remote:xml:https://betawayf.wayf.dk/saml2/idp/metadata.php',
    );

    $meta->prepareMetadata($metadatasources, '', 'birk');
}