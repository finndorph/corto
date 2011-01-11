<?php
error_reporting(E_ALL);

set_error_handler('error2exception', E_ALL);

function error2exception($errno, $errmsg)
{
    throw new Exception('This Error Happened ' . $errno . ': ' . $errmsg);
}

try {

/*
 * If called without path - use index.php
 */

    require '../library/Corto/ProxyServer.php';
    $server = new Corto_ProxyServer();
    require '../filters/DemoFilter.php';

/*
 * Initializing metadata for demo purposes
 */
    preg_match("/^([^\.]+)/", basename(__FILE__), $dollar);

    $instance = $dollar[1];

    $server->setMetadata('../metadata/', $instance, true);

    $server->setTemplatePath(dirname(__FILE__) . '/../templates/');

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
    $server->serveRequest();
} catch (Exception $e) {
    header('HTTP/1.0 500 Internal Server Error');
    header('Content-Type: text/plain; charset=utf-8');
    $uri = 'http' . (nvl($_SERVER, 'HTTPS') ? 's' : '') . '://' . $_SERVER['HTTP_HOST']
            . $_SERVER['PHP_SELF'];
    echo("ERROR: $uri \n");
    echo($e->getMessage() . "\n");
    echo $e->getTraceAsString();
}
