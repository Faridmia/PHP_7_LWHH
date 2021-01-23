<?php

$data = [

    [
        'fname' =>'raju',
        'lname' => 'mia',
        'email' => 'raju@gmail.com',
        'time' => time(),
        'district' => 'dhaka'
    ],

    [
        'fname' =>'tuhin',
        'lname' => 'mia',
        'email' => 'tuhin@gmail.com',
        'time' => time(),
        'district' => 'dhaka'
    ],
    [
        'fname' =>'diba',
        'lname' => 'aktari',
        'email' => 'diba@gmail.com',
        'time' => time(),
        'district' => 'dhaka'
    ],
    [
        'fname' =>'josim',
        'lname' => 'mia',
        'email' => 'josim@gmail.com',
        'time' => time(),
        'district' => 'dhaka'
    ],

    [
        'fname' =>'tuli',
        'lname' => 'akter',
        'email' => 'tuli@gmail.com',
        'time' => time(),
        'district' => 'dhaka'
    ],
    [
        'fname' =>'jasmin',
        'lname' => 'akter',
        'email' => 'jasmin@gmail.com',
        'time' => time(),
        'district' => 'dhaka'
    ],
    [
        'fname' => urlencode('জেন'),
        'lname' => urlencode('ডো'),
        'email' => 'jasmin@gmail.com',
        'time' => time(),
        'district' => 'dhaka'
    ],


];

foreach($data as $entry){

    $ch = curl_init("https://docs.google.com/forms/u/0/d/e/1FAIpQLSfF7hcUTVGn0HOvmCDxJcmFuCjkLahqEWkjCZAzSygj-0SL5Q/formResponse");

    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
    curl_setopt($ch,CURLOPT_CUSTOMREQUEST,'POST');
    curl_setopt($ch,CURLOPT_POSTFIELDS,"entry.1103197416={$entry['fname']}&entry.1455426916={$entry['lname']}&entry.408673154={$entry['email']}&entry.1556050971={$entry['time']}&entry.2104361375={$entry['district']}");

    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

    $resutl = curl_exec($ch);

    if(curl_error($ch)){
        echo curl_error($ch);
    }else{
        echo $resutl;
    }

}