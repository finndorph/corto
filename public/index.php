<?php
error_reporting(E_ALL);

ini_set("memory_limit", "400M");

require '../library/Corto/cortocrypto.php';

if (empty($_SERVER['PATH_INFO'])) include 'demo.php';
require '../library/Corto/ProxyServer.php';
$server = new Corto_ProxyServer();

$config = array();
require '../configs/config.inc.php';
$server->setConfigs($config);

require '../library/Corto/Metadata/Standard.php';
$meta = new Corto_Metadata_Standard();

$usecached = false;
if (!$usecached) {
    #$meta->addExternalMetadataToFederation('http://localhost/corto/public/slp.wayf.dk.php', 'testing');
    $meta->addMetadataToFederation('../configs/slp.meta.xml', 'testing');
    $meta->addMetadataToFederation('../configs/cortotest.meta.php', 'testing');
    #$meta->addMetadataToFederation('../configs/cortotest.meta.xml', 'testing');
    $meta->addMetadataToFederation('../configs/cortotest.privateparts.meta.php', 'testing');
    #print_r($meta->getMetadata());
    #print_r($meta->getUrl2Metadata()); exit;
}

$server->setRemoteEntities($meta->getMetadata($usecached));
$server->setUrl2meta($meta->getUrl2Metadata());

require '../configs/attributes.inc.php';
$server->setAttributeMetadata($attributes);

$server->setTemplateSource(
    Corto_ProxyServer::TEMPLATE_SOURCE_FILESYSTEM,
    array(
        'FilePath' => dirname(__FILE__) . '/../templates/')
);

require '../library/Corto/Module/Services.php';
$server->setServicesModule(new Corto_Module_Services($server));

require '../library/Corto/Module/Bindings.php';
$server->setBindingsModule(new Corto_Module_Bindings($server));

require '../library/Corto/Log/Syslog.php';
$server->setSystemLog(new Corto_Log_Syslog());
try {
    $server->serveRequest();
} catch (Exception $e) {
    header('HTTP/1.0 500 Internal Server Error');
    header('Content-Type: text/plain; charset=utf-8');
    echo("ERROR\n");
    echo($e->getMessage() . "\n");
}

function nvl(&$array, $index, $default = null)
{
    if (isset($array[$index])) return $array[$index];
    return $default;
}

function nvl2(&$array, $index, $index2, $default = null)
{
    if (isset($array[$index][$index2])) return $array[$index][$index2];
    return $default;
}

function nvl3(&$array, $index, $index2, $index3, $default = null)
{
    if (isset($array[$index][$index2][$index3])) return $array[$index][$index2][$index3];
    return $default;
}