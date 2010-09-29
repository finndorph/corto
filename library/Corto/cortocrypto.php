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