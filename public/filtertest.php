<?php

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

    $data = array('abc' => 'def');
    $data = handlefilters($data, $filters);

    header('Content-Type: text/plain');
    print_r($data);

} else {
    DefaultFilter::demofilter2();

}

function handlefilters($data, $filters)
{
    /*
     * Backend need to have 'cortopassthru' in POST / GET - can be used as backend session id as well
     * Corto data is always sent to backend - is in corto session anyway - no need to save in
     * backend session as well!
     */
    $cortopassthru = $_POST['cortopassthru'] . $_GET['cortopassthru'];
    $cortofirstcall = false;

    /*
    * First time thru - set up session
    * Need unique id as a user can have more than one filter active at any one time
    */
    if (empty($cortopassthru)) {
        $cortopassthru = sha1(uniqid(mt_rand(), true));
        $_SESSION['corto_filter'][$cortopassthru]['i'] = 0;
        $_SESSION['corto_filter'][$cortopassthru]['data'] = $data;
        $cortofirstcall = true;
        unset($_POST);
    }

    /*
     * Loop thru all the filters
     * callfilter does NOT return if there is user interaction involved
     * Stop when there are no more filters
     */
    while (1) {
        $filter = $filters[$_SESSION['corto_filter'][$cortopassthru]['i']];
        if (!$filter) {
            unset($_SESSION['corto_filter'][$cortopassthru]);
            return $data;
        }
        $data = $_SESSION['corto_filter'][$cortopassthru]['data'];
        $data = callfilter($filter, $data, $cortopassthru, $cortofirstcall);
        $_SESSION['corto_filter'][$cortopassthru]['i']++;
        $_SESSION['corto_filter'][$cortopassthru]['data'] = $data;
        $cortofirstcall = true;
        unset($_POST);
    }
}

function callfilter($filter, $data, $cortopassthru, $cortofirstcall)
{
    $_POST['cortodata'] = $data;
    $_POST['cortocookiepath'] = "";
    $_POST['cortopassthru'] = $cortopassthru;
    $_POST['cortofirstcall'] = $cortofirstcall;
    $_POST['cortolocation'] = 'http' . ($_SERVER['HTTPS'] ? 's' : '') . '://'
            . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    if ($thefilter = $filter['url']) {
        $_POST['cortotoken'] = $filter['token'];
        $_POST['cortoreturn'] = 'json';

        $cookiestr = "";
        $delim = "";
        foreach ((array) $_SESSION['corto_filter'][$cortopassthru]['cookies'] as $name => $value) {
            $cookiestr .= "$name=$value$delim";
            $delim = ";";
        }
        if ($cookiestr) {
            $cookiestr = "Cookie: $cookiestr\r\n";
        }
        $context = stream_context_create(array(
            'http' => array(
                'method' => 'POST',
                'header' => $cookiestr . "Content-type: application/x-www-form-urlencoded\r\n",
                'content' => http_build_query($_POST),
                'timeout' => 5,
            ),
        ));

        $ret = file_get_contents($thefilter, false, $context);
        foreach ($http_response_header as $header) {
            if (substr(strtolower($header), 0, 12) == 'set-cookie: ') {
                $namevalue = split('=', array_shift(explode(';', trim(substr($header, 12)))));
                $_SESSION['corto_filter'][$cortopassthru]['cookies'][trim($namevalue[0])] = trim($namevalue[1]);
            }
        }
        if (in_array('X-Corto-Return: true', $http_response_header)) {
            return json_decode($ret, 1);
        } else {
            print $ret;
            exit;
        }
    } elseif ($thefilter = $filter['php']) {
        $_POST['cortoreturn'] = 'array';
        return call_user_func($thefilter, $_POST);
    } else {
        // exception ...
    }
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
            session_start();
        }

        if ($_POST['cortofirstcall']) {
            $d = $_POST['cortodata'];
        } else {
            $d = $_SESSION['DefaultFilter_demofilter2'];
        }

        $d['c']++;
        $d['demo'][] = 'Demo was here';
        $d['filters'][] = 'DefaultFilter.:demofilter2';
        $d['input'][] = $_POST['state'];
        if (!$_POST['nomore']) {
            $_SESSION['DefaultFilter_demofilter2'] = $d;
            $_SESSION['c']++;
            ?>
            <html>
            <head>
                <body>
                <form method=POST action="<?= $_POST['cortolocation'] ?>">
                    <input type="submit" name="Submit">
                    <input type="hidden" name="cortopassthru" value="<?= $_POST['cortopassthru'] ?>">
                    <input type="text" name="state" value="anton banton">
                    <input type="checkbox" name="nomore" value="1">

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
