<?php

$link = "https://api.lifx.com/v1/lights/d073d536e584/toggle";
$authToken = "c0ff795b628977c7c8f88c3e8455523cb5888875b958d1acb44f7bc9db68b211";

$headers = array('Authorization: Bearer ' . $authToken);

$ch = curl_init($link);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POST, true);
$response = curl_exec($ch);
