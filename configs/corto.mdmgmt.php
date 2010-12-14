<?php
/**
 * Created by PhpStorm.
 * User: freek
 * Date: Dec 14, 2010
 * Time: 11:05:27 AM
 * To change this template use File | Settings | File Templates.
 */
 
require '../library/Corto/Module/Metadata.php';
$meta = new Corto_Module_Metadata();

$metadatasources = array(
    'private' => ARRAY(
        'php:' . dirname(__FILE__) . '/../configs/cortotest.common.meta.php',
    ),

    'federations' => array(
        'testing' => array(
            'private' => array(
                'php:' . dirname(__FILE__) . '/../configs/cortotest.privateparts.meta.php',
            ),
            'public' => array(
                # json: ...
                # xml: ... default
                'php:' . dirname(__FILE__) . '/../configs/cortotest.meta.php',
                #'http://janus-dev.test.wayf.dk/module.php/janus/exportentities.php?type[]=saml20-idp&state=prodaccepted&mimetype=--+Please+select+MIME+type+--&external=corto',
            ),
        ),
    ),
);

$metadatafile = '/var/tmp/corto_optimized_metadata.php';

$meta->prepareMetadata($metadatasources, $metadatafile);
