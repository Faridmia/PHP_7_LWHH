<?php

$filename = 'C:\xampp\htdocs\oop\filefolder\data\f2.txt';
$file_existdata = file_get_contents($filename);
//$fp = fopen($filename,"w");
$fp = fopen($filename,"a");



$write = fwrite($fp,$file_existdata);
$write = fwrite($fp,"malasia\n");
$write = fwrite($fp,"test333\n");
$write = fwrite($fp,"test444\n");
$write = fwrite($fp,"test5555\n");


//echo $write;

//fclose();

