<?php
/**
 * Created by PhpStorm.
 * User: freek
 * Date: Sep 23, 2010
 * Time: 11:59:06 PM
 * To change this template use File | Settings | File Templates.
 */

function encrypt($cleartext, $passphrase)
{
    if (function_exists('mcrypt_encrypt')) {
        $key_len = mcrypt_get_key_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC);
        $iv_len = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC);
        $salt = mcrypt_create_iv(8, MCRYPT_DEV_URANDOM);
        list($key, $iv) = salted_key_and_iv($key_len, $iv_len, $passphrase, $salt);
        return 'Salted__' . $salt . mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $cleartext, MCRYPT_MODE_CBC, $iv);
    } else {
        return openssldo('encrypt', $cleartext, $passphrase);
    }
}

function decrypt($ciphertext, $passphrase)
{
    if (function_exists('mcrypt_encrypt')) {
        $key_len = mcrypt_get_key_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC);
        $iv_len = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC);
        $salt = substr($ciphertext, 8, 8);
        list($key, $iv) = salted_key_and_iv($key_len, $iv_len, $passphrase, $salt);
        return trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, substr($ciphertext, 16), MCRYPT_MODE_CBC, $iv));
    } else {
        return openssldo('decrypt', $ciphertext, $passphrase);
    }
}

function salted_key_and_iv($key_len, $iv_len, $passphrase, $salt)
{
    $desired_len = $key_len + $iv_len;
    $data = $dx = "";
    while (strlen($data) < $desired_len) {
        $dx = md5($dx . $passphrase . $salt, true);
        $data .= $dx;
    }
    return array(substr($data, 0, $key_len), substr($data, $key_len, $iv_len));
}

function openssldo($cmd, $cipher, $passphrase)
{
    $text = '';
    $descriptorspec = array(
        0 => array("pipe", "r"), // stdin
        1 => array("pipe", "w"), // stdout
        2 => array("pipe", "w"), // stderr
        3 => array("pipe", "r"), // passphrase
    );
    $cmds = array('encrypt' => '-e', 'decrypt' => '-d');
    $command = "/usr/bin/openssl enc -aes-256-cbc -pass fd:3 -salt {$cmds[$cmd]}";
    $process = proc_open($command, $descriptorspec, $pipes);

    if (is_resource($process)) {
        fwrite($pipes[3], $passphrase);
        fclose($pipes[3]);
        fwrite($pipes[0], $cipher);
        fclose($pipes[0]);
        $text = stream_get_contents($pipes[1]);

        fclose($pipes[1]);
        fclose($pipes[2]);
        return $text;
    }
}

/**
 * nvl (from Oracle) replaces
 * if (isset(array[$index] && array[$index])
 * with
 * if (nvl($array, $index))
 */
function nvl($array, $index, $default = null)
{
    if (isset($array[$index])) return $array[$index];
    return $default;
}

function nvl2($array, $index, $index2, $default = null)
{
    if (isset($array[$index][$index2])) return $array[$index][$index2];
    return $default;
}

function nvl3($array, $index, $index2, $index3, $default = null)
{
    if (isset($array[$index][$index2][$index3])) return $array[$index][$index2][$index3];
    return $default;
}

function ID()
{
    return sha1(uniqid(mt_rand(), true));
}

;
function timeStamp($delta = 0)
{
    return gmdate('Y-m-d\TH:i:s\Z', time() + $delta);
}

/*
 *    $filters = array(array('php' => 'DefaultFilter::demofilter'),
 *                     array('php' => 'DefaultFilter::demofilter2'),
 *                    array('url' => 'http://localhost/corto/public/filtertest.php/filter1', 'token' => 'secret'),
 *
 *
 *
 */

function handlefilters($phase = 'init', &$data = null, $filters = null)
{
    $cortopassthru = nvl($_POST, 'cortopassthru') . nvl($_GET, 'cortopassthru');
    if ($phase == 'init') {
        if ($cortopassthru) {
            return false;
        }
        return true;
    }
    /*
     * Backend need to have 'cortopassthru' in POST / GET - can be used as backend session id as well
     * Corto data is always sent to backend - is in corto session anyway - no need to save in
     * backend session as well!
     */
    $cortofirstcall = false;

    /*
    * First time thru - set up session
    * Need unique id as a user can have more than one filter active at any one time
    */
    $dbt = debug_backtrace();
    $fileline = sha1($dbt[0]['file'] . $dbt[0]['line']);

    if (empty($cortopassthru)) {
        $cortopassthru = sha1(uniqid(mt_rand(), true));
    }
    if (empty($_SESSION['corto_filter'][$cortopassthru])) {
        $_SESSION['corto_filter'][$cortopassthru]['i'] = 0;
        $_SESSION['corto_filter'][$cortopassthru]['data'] = $data;
        $_SESSION['corto_filter'][$cortopassthru]['fileline'] = $fileline;
        $cortofirstcall = true;
        unset($_POST);
    }

    /*
     * This is
     */
    if ($_SESSION['corto_filter'][$cortopassthru]['fileline'] != $fileline) {
        return false;
    }
    /*
     * Loop thru all the filters
     * callfilter does NOT return if there is user interaction involved
     * Stop when there are no more filters
     */


    while (1) {
        $filter = nvl($filters, $_SESSION['corto_filter'][$cortopassthru]['i']);
        if (!$filter) {
            unset($_SESSION['corto_filter'][$cortopassthru]);
            return true;
        }
        $data = $_SESSION['corto_filter'][$cortopassthru]['data'];
        $data = callfilter($phase, $filter, $data, $cortopassthru, $cortofirstcall);
        $_SESSION['corto_filter'][$cortopassthru]['i']++;
        $_SESSION['corto_filter'][$cortopassthru]['data'] = $data;
        $cortofirstcall = true;
        #unset($_POST);
    }
}

function callfilter($phase, $filter, $data, $cortopassthru, $cortofirstcall)
{
    $_POST['cortophase'] = $phase;
    $_POST['cortodata'] = $data;
    $_POST['cortocookiepath'] = "";
    $_POST['cortopassthru'] = $cortopassthru;
    $_POST['cortofirstcall'] = $cortofirstcall;
    $_POST['cortolocation'] = 'http' . (nvl($_SERVER, 'HTTPS') ? 's' : '') . '://'
            . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    if ($thefilter = nvl($filter, 'url')) {
        $_POST['cortotoken'] = $filter['token'];
        $_POST['cortoreturn'] = 'json';

        $content = http_build_query($_POST);
        $headers = array('Host', 'User_Agent', 'Accept', 'Accept_Language', 'Accept_Encoding',
                         'Accept_Charset', 'Cookie');
        foreach ($headers as $h) {
            $k = str_replace('_', '-', ucfirst($h));
            $header .= "$k: " . $_SERVER['HTTP_' . strtoupper($h)] . "\r\n";
        }
        $header .= "Content-type: application/x-www-form-urlencoded\r\n";
        $header .= 'Content-length: ' . strlen($content) . "\r\n";
        $context = stream_context_create(array(
            'http' => array(
                'method' => 'POST',
                'header' => $header,
                'content' => $content,
                'timeout' => 5,
            ),
        ));
        $ret = file_get_contents($thefilter, false, $context);
        if (in_array('X-Corto-Return: true', $http_response_header)) {
            return json_decode($ret, 1);
        } else {
            foreach ($http_response_header as $header) {
                header($header);
            }
            print $ret;
            print_r($http_response_header);
            exit;
        }
    } elseif ($thefilter = $filter['php']) {
        $_POST['cortoreturn'] = 'array';
        return call_user_func($thefilter, $_POST);
    } else {
        // exception ...
    }
}
