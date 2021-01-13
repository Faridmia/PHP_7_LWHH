<?php 


$string = "hello world,world how are you";

$explode = explode(" ",$string);

print_r($explode);

echo PHP_EOL;

$orginal = join(" ",$explode);

echo $orginal;

echo PHP_EOL;

$parts2 = str_split($string);
print_r($parts2);
echo PHP_EOL;

$total = array_count_values($parts2);

foreach($total as $key => $value){
    if($key != " "){
        echo $key .'='.$value;
        echo PHP_EOL;
    }
}

$parts3 = strtok($string," ,");

while($parts3 !==false){
    echo $parts3."\n";
    $parts3 = strtok(" ,");
}
echo PHP_EOL;

$parts5 = preg_split("/\s|,/",$string);

print_r($parts5);
