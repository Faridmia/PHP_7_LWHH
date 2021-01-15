<?php
$filename = 'C:\xampp\htdocs\oop\filefolder\data\f6.txt';

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


// $data = serialize($students);

// file_put_contents($filename,$data,LOCK_EX);
$dataFromFile = file_get_contents($filename);
$data = unserialize($dataFromFile);


$students = array(
    'fname' => 'jobber',
    'lname' => 'mia',
    'age' => '20',
    'class' => '16',
    'roll' => '2040'
);

array_push($data,$students);

print_r($data);

$dataFromFile = file_get_contents($filename);
$data = unserialize($dataFromFile);
unset($data[1]);

print_r($data);