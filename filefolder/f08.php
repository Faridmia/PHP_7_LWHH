<?php
$filename = 'C:\xampp\htdocs\oop\filefolder\data\f7.txt';

$students = array(
    array(
        'fname' => 'rahim',
        'lname' => 'mia',
        'age' => '20',
        'class' => '16',
        'roll' => '2040'
    ),
    array(
        'fname' => 'tangila',
        'lname' => 'akter',
        'age' => '20',
        'class' => '16',
        'roll' => '2040'
    ),
    array(
        'fname' => 'karim',
        'lname' => 'mia',
        'age' => '20',
        'class' => '16',
        'roll' => '2040'
    ),
    array(
        'fname' => 'nikhil',
        'lname' => 'akter',
        'age' => '20',
        'class' => '16',
        'roll' => '2040'
    ),
);

// $encodeData = json_encode($students);

// file_put_contents($filename,$encodeData,LOCK_EX);

$data = file_get_contents($filename);

$allstudent = json_decode($data);// object hisabe asbe
$allstudent2 = json_decode($data,true);// true dile associative array hisabe asbe

//print_r($allstudent);

echo $allstudent[0]->fname."\n";

echo $allstudent2[0]['fname'];



