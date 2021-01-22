<?php

//$curl = curl_init("http://localhost/oop/curl/hello.php/");
$curl = curl_init();

curl_setopt($curl,CURLOPT_URL,"http://localhost/oop/curl/hello.php/");

curl_setopt($curl,CURLOPT_CUSTOMREQUEST,'POST');

curl_setopt($curl,CURLOPT_POSTFIELDS,'secret=noodles');

curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);

$var = curl_exec($curl);

echo strtoupper($var);