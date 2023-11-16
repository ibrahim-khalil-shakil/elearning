<?php

//Two way encryption method to encrypt sll data from url

function encryptor($action, $string)
{
    $output = false;

    $encrypt_method = "AES-256-CBC";
    // pls set your unique hashing key
    $secret_key = 'beatnik#technolgoy_sampreeti';
    $secret_iv = 'beatnik$technolgoy@sampreeti';

    //hash
    $key = hash('sha256', $secret_key);

    //iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);

    //do the encryption given text/string/number
    if ($action == 'encrypt') {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    } else if ($action == 'decrypt') {
        //decrypt the given text/string/number
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }
    return $output;
}

function currentUserId()
{
    return encryptor('decrypt', request()->session()->get('userId'));
}

function fullAccess()
{
    return encryptor('decrypt', request()->session()->get('accessType'));
}

function currentUser()
{
    return encryptor('decrypt', request()->session()->get('roleIdentity'));
}
