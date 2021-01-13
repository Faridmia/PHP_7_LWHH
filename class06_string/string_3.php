<?php

$string = "hello world";

echo substr($string,-2);
echo PHP_EOL;

$length = strlen($string);

echo substr($string,$length-4);
echo PHP_EOL;
echo substr($string,-7,4);