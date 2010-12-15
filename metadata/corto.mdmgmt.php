<?php
/**
 * Created by PhpStorm.
 * User: freek
 * Date: Dec 14, 2010
 * Time: 11:05:27 AM
 * To change this template use File | Settings | File Templates.
 */

require '../library/Corto/XmlToArray.php';
require '../library/Corto/cortolib.php';

require '../library/Corto/Module/Metadata.php';
$meta = new Corto_Module_Metadata();

preg_match("/^([^\.]+)/", basename(__FILE__), $dollar);

$federation = $dollar[1];

$metadatasources = array(
    'php:' . dirname(__FILE__) . '/../metadata/cortotest.common.meta.php',
    'php:' . dirname(__FILE__) . '/../metadata/cortotest.privateparts.meta.php',
    'php:' . dirname(__FILE__) . '/../metadata/cortotest.meta.php',
);

$metadatafile = $federation . '.optimized.metadata.php';

$meta->prepareMetadata($metadatasources, $metadatafile);
