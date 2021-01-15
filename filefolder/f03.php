<?php

$filename = 'C:\xampp\htdocs\oop\filefolder\data\f2.txt';

$fp = fopen($filename,"r+");

$line = fgets($fp);

echo $line;

$write = fwrite($fp,"malasia\n");
$line = fgets($fp);

echo $line;



