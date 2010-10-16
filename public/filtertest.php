<?php

include "../Library/Corto/cortolib.php";
error_reporting(E_WARNING);
$cmd = preg_split("/\//", $_SERVER['PATH_INFO'], -1, PREG_SPLIT_NO_EMPTY);
if (!$cmd) {

    /**
     * A Corto filter is a remote webservices or a static class function which
     * is sent some data - typically a saml request or saml response - at specific
     * phases in the handling of saml messages thru Corto.
     *
     * A filter can use the data for any purpose it sees fit - typically it
     * modifies the attributes of the assertion in a response, but it may
     * eg. save it in a LDAP database for later use as well.
     *
     * A filter can interact with the user during the filtering if it adheres
     * to a simple protocol:
     *
     * - use the provided 'cortolocation' as the action / url
     * - use the provided 'cortopassthru' opaque token - in POST or GET
     *
     * and for functions:
     *
     * - only return the relevant data to corto when filtering is done otherwise exit
     *
     * and for remote services:
     *
     * - return the relevant data as json with the header 'X-Corto-Return: true'
     *   present when filtering is done. All other output will pass thru Corto
     * what about headers ??? and cookies ???.
     *
     * If a filter does not have any user interaction it should just return
     * the filtered data as per above.
     *
     * Both local functions and remote services receive parameters from Corto
     * as well as any POST'ed parameters in $_POST and url parameters in $_GET
     * (or the equivalent if the remote service is written in another language)
     *
     * The corto specific data is provided in $_POST['cortodata'].
     * If the filter does interact with the user it will be invoked multiple times
     * and in the first call $_POST['cortofirstcall'] will be set to true ('true'
     * if it is a remote service).
     *
     * Local functions can use $_SESSION. Use the eg. classname/functionname as a
     * top level key to prevent collisions with other filters.
     *
     * Remote services may use standard cookie based session handling for keeping a state
     * between invocations (in the same filtering transaction!). Only the Set-Cookie
     * name=value pairs are used. All other parameters are ignored.
     *
     * It is possible to use the exact same (php) code as either a remote service or
     * a function except for the way the result is returned. If you want to use
     * cookies you will have to call start_session yourself:
     *
     * A provided parameter 'cortoreturn' is 'json' when the filter is invoked as
     * a remote service and 'array' when invoked as a local function.
     *
     * if ($_POST['cortoreturn'] == 'json') {
     *     session_start();
     * }
     *
     * ...
     *
     * At the end use this:
     *
     * if ($_POST['cortoreturn'] == 'array') {
     *    return $d;
     * } else {
     *    header('X-Corto-Return: true');
     *    print json_encode($d);
     *    exit;
     * }
     *
     *
     *
     *
     * Filters can be:
     *
     * - input
     * - output including consent
     * - discovery
     *

    request in   request
    request out  orig request new request
    response in  request response
    response out request response
    discovery

     */

    session_name('filtertest');
    session_start();

    $filters = array(array('php' => 'DefaultFilter::demofilter'),
                     array('php' => 'DefaultFilter::demofilter2'),
                     array('url' => 'http://localhost/corto/public/filtertest.php/filter1', 'token' => 'secret'),
                     array('url' => 'http://localhost/corto/public/filtertest.php/filter3', 'token' => 'secret'),
                     array('url' => 'http://localhost/corto/public/filtertest.php/filter2', 'token' => 'secret'),
                     array('url' => 'http://localhost/corto/public/filtertest.php/filter3', 'token' => 'what'),
                     array('php' => 'DefaultFilter::demofilter'));

    /*
     * This is the 'client' interface:
     * Given some data - let the filters do their job and return the filtered data
     * The filter can be:
     * - a local static function call
     * - a remote webservice
     * - a remote webservice with a number of user interactions
     */
    if (handlefilters()) {
        $data = array('abc' => array('def'));
    }
    if (handlefilters($data, $filters)) {
        $data['abc'][] = 'hij';
    }
    if (handlefilters($data, $filters)) {

    }

    header('Content-Type: text/plain');
    print_r($data);

} else {
    DefaultFilter::demofilter2();

}

class DefaultFilter {

    static function demofilter()
    {
        $data = $_POST['cortodata'];
        $data['demo'][] = 'Demo was here';
        $data['filters'][] = 'DefaultFilter.:demofilter';
        return $data;
    }

    static function demofilter2()
    {
        if ($_POST['cortoreturn'] == 'json') {
            session_name('backend');
            session_start();
        }

        if ($_POST['cortofirstcall']) {
            $_SESSION['DefaultFilter_demofilter2'] = $_POST['cortodata'];
        }
        $d = $_SESSION['DefaultFilter_demofilter2'];

        if ($_POST['nomore']) {
            $d['input'][] = 'x' . $_POST['state'];
        } else {
            $d['c']++;
            $d['demo'][] = $_POST['cortoreturn'];
            $d['filters'][] = 'DefaultFilter.:demofilter2';
            $_SESSION['DefaultFilter_demofilter2'] = $d;
            $_SESSION['c']++;
            ?>
            <html>
            <head>
                <body>
                <form method=POST action="<?= $_POST['cortolocation'] ?>">
                    <input type="submit" name="Submit">
                    <input type="hidden" name="cortopassthru" value="<?= $_POST['cortopassthru'] ?>">
                    <input type="text" name="state" value="<?= $_SESSION['c'] ?>">
                    <input type="checkbox" name="nomore" value="1" checked>

                    <p>Count: <?= $_SESSION['c'] ?></p>

                    <p>Return: <?= $_POST['cortoreturn'] ?></p>

                    <p>demofilter2</p>
                </form>
                </body>
            </head>
            </html>
            <?php
            exit;
        }
        if ($_POST['cortoreturn'] == 'array') {
            return $d;
        } else {
            header('X-Corto-Return: true');
            print json_encode($d);
            exit;
        }
    }
}
