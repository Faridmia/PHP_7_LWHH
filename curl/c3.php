<?php 

    $ch = curl_init("https://simplenote.com");
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
    $resutl = curl_exec($ch);

    // $error = curl_error($resutl);

    // if($error){
    //     echo $error;
    // }
