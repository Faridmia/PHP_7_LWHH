<?php

$string = "hello world";

$length1 = strlen($string) -1;

for($i = $length1; $i >= 0; $i--){
    echo $string[$i];
}
echo PHP_EOL;
$length = strlen($string);


for($i = 1; $i<=$length; $i++){
    echo $string[$i * -1];
}