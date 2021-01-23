<?php

$ch = curl_init("https://docs.google.com/forms/u/0/d/e/1FAIpQLSfF7hcUTVGn0HOvmCDxJcmFuCjkLahqEWkjCZAzSygj-0SL5Q/formResponse");

curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($ch,CURLOPT_CUSTOMREQUEST,'POST');
curl_setopt($ch,CURLOPT_POSTFIELDS,"entry.1103197416=Farid&entry.1455426916=Mia&entry.408673154=faridcse7800@gmail.com&entry.1556050971=01739692387&entry.2104361375=faridpur");

curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

$resutl = curl_exec($ch);

if(curl_error($ch)){
    echo curl_error($ch);
}else{
    echo $resutl;
}