<?php
/**
 * Created by PhpStorm.
 * User: Wande Tricada
 * Date: 6/22/2015
 * Time: 2:54 PM
 */

//fungsi untuk login with amikom return informasi nama, nim,status
function login($username,$password){
    $loginUrl = 'http://amikom.ac.id/index.php/main/log';

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $loginUrl);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, 'u='.$username.'&p='.$password);
    curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $store = curl_exec($ch);
    $out=json_decode($store);
    $out->nim=$username;
    return $out;
}

function cekStatus($data){
    if($data->status ==0 || $data->alumni==1){
        return 0;
    }else{
        return 1;
    }
}