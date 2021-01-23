<?php

$ch = curl_init("http://localhost/oop/curl/form.php");

curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

curl_setopt($ch,CURLOPT_CUSTOMREQUEST,'POST');

curl_setopt($ch,CURLOPT_POSTFIELDS,'user=john&pass=hello&submit=1');

$cookie_file = '/tmp/cookies.txt';
curl_setopt($ch,CURLOPT_COOKIEJAR,$cookie_file);


echo curl_exec($ch);

$ch = curl_init("http://localhost/oop/curl/form.php");
curl_setopt($ch,CURLOPT_COOKIEFILE,$cookie_file);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

echo curl_exec($ch);

$ch = curl_init("http://localhost/oop/curl/form.php?logout=1");
curl_setopt($ch,CURLOPT_COOKIEFILE,$cookie_file);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

echo curl_exec($ch);

