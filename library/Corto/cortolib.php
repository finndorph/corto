<?php
/**
 * Created by PhpStorm.
 * User: freek
 * Date: Sep 23, 2010
 * Time: 11:59:06 PM
 * To change this template use File | Settings | File Templates.
 */

function xencrypt($cleartext, $passphrase)
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

function xdecrypt($ciphertext, $passphrase)
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
    /* ID's should start with letter or '_'. Corto uses
     * 'z' because ID's are used as session id's and
     * '_' is not a legal in php session id's.
     */

    return 'z' . sha1(uniqid(mt_rand(), true));
}

;
function timeStamp($delta = 0)
{
    return gmdate('Y-m-d\TH:i:s\Z', time() + $delta);
}

function debug($name, $x)
{
    file_put_contents('/tmp/corto_debug_log', "$name:\n" . print_r($x, 1) . "\n+++\n", FILE_APPEND);
}

function db_get($key, $subkey = '_')
{
    $id = db_start($key);
    if ($subkey == '*') {
        $res = $_SESSION;
    } else {
        $res = nvl($_SESSION, $subkey);
    }
    db_end($id);
    return $res;
}

function db_put($key, $value, $subkey = '_')
{
    $id = db_start($key);
    $_SESSION[$subkey] = $value;
    db_end($id);
}

function db_add($key, $value, $subkey = '_')
{
    $id = db_start($key);
    if (empty($_SESSION[$subkey][$value])) {
        $_SESSION[$subkey][$value] = 1;
    } else {
        $_SESSION[$subkey][$value]++;
    }
    db_end($id);
}

function db_del($key, $subkey = '_')
{
    $id = db_start($key);
    if ($subkey == '*') {
        $res = $_SESSION;
        session_destroy();
    } else {
        $res = nvl($_SESSION, $subkey);
        unset($_SESSION[$subkey]);
        if (empty($_SESSION)) {
            session_destroy();
        }
    }
    db_end($id);
    return $res;
}

function db_start($key)
{
    session_write_close();
    $id = session_id($key);
    session_start();
    return $id;
}

function db_end($id)
{
    session_write_close();
    session_id($id);
    session_start();
}

function delete_corto_session($sessionid)
{
    db_del($sessionid, '*');
}

function attributes2array($attributes)
{
    $res = array();
    foreach ((array) $attributes as $attribute) {
        foreach ($attribute['saml:AttributeValue'] as $value) {
            $res[$attribute['_Name']][] = $value['__v'];
        }
    }
    return $res;
}

function array2attributes($attributes)
{
    $res = array();
    foreach ((array) $attributes as $name => $attribute) {
        $newAttribute = array(
            '_Name' => $name,
            '_NameFormat' => 'urn:oasis:names:tc:SAML:2.0:attrname-format:basic',
        );
        foreach ((array) $attribute as $value) {
            $newAttribute['saml:AttributeValue'][] = array(
                '_xmlns:xsi' => 'http://www.w3.org/2001/XMLSchema-instance',
                '_xsi:type' => 'xs:string',
                '__v' => $value,
            );
        }
        $res[] = $newAttribute;
    }
    return $res;
}

