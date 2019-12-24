<?php


$cURLConnection = curl_init();

curl_setopt($cURLConnection, CURLOPT_URL, 'http://192.168.99.4/admin/config.php');
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

$phoneList = curl_exec($cURLConnection);
curl_close($cURLConnection);
var_dump($phoneList);