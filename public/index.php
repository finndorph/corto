<?php
error_reporting(E_ALL);

require '../filters/DemoFilter.php';
require '../library/Corto/cortolib.php';

/*
 * If called without path - use demo.php
 */
if (empty($_SERVER['PATH_INFO'])) include 'demo.php';
require '../library/Corto/ProxyServer.php';
$server = new Corto_ProxyServer();

/*
 * remove asap
 */
$config = array();
#require '../configs/config.inc.php';
$server->setConfigs($config);

require '../library/Corto/Metadata/Standard.php';
$meta = new Corto_Metadata_Standard();

/*
 * Initializing metadata for demo purposes
 */
$meta->addMetadataToFederation('../configs/cortotest.meta.php', 'testing');
$meta->addMetadataToFederation('../configs/cortotest.privateparts.meta.php', 'testing');

$server->setRemoteEntities($meta->getMetadata());
$server->setUrl2meta($meta->getUrl2Metadata());

$server->setTemplateSource(
    Corto_ProxyServer::TEMPLATE_SOURCE_FILESYSTEM,
    array(
        'FilePath' => dirname(__FILE__) . '/../templates/')
);

/*
 * include standard modules
 */
require '../library/Corto/Module/Services.php';
$server->setServicesModule(new Corto_Module_Services($server));

require '../library/Corto/Module/Bindings.php';
$server->setBindingsModule(new Corto_Module_Bindings($server));

require '../library/Corto/Log/Syslog.php';
$server->setSystemLog(new Corto_Log_Syslog());

/*
 * Handle requests/responses to Corto
 */
try {
    $server->serveRequest();
} catch (Exception $e) {
    header('HTTP/1.0 500 Internal Server Error');
    header('Content-Type: text/plain; charset=utf-8');
    $uri = 'http' . (nvl($_SERVER, 'HTTPS') ? 's' : '') . '://' . $_SERVER['HTTP_HOST']
                    . $_SERVER['PHP_SELF'];
    echo("ERROR: $uri \n");
    echo($e->getMessage() . "\n");
}
