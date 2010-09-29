<?php
error_reporting(E_ALL);
ini_set("memory_limit", "400M");

require '../library/corto/cortocrypto.php';

if (empty($_SERVER['PATH_INFO'])) include 'demo.php';
require '../library/Corto/ProxyServer.php';
$server = new Corto_ProxyServer();

$config = array();
require '../configs/config.inc.php';
$server->setConfigs($config);

require '../library/Corto/Metadata/Standard.php';
$meta = new Corto_Metadata_Standard();

#$meta->addMetadataToFederation('../configs/kalmar2.org.meta.xml', 'kalmar2');
#$meta->addMetadataToFederation('../configs/ukfederation-metadata.xml', 'kalmar2');
$meta->addMetadataToFederation('../configs/cortotest.meta.php', 'testing');
$meta->addMetadataToFederation('../configs/cortotest.privateparts.meta.php', 'testing');

$server->setRemoteEntities($meta->getMetadata());
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

$server->serveRequest();

function nvl(&$array, $index, $default = null) {
    if (isset($array[$index])) return $array[$index];
    return $default;
}