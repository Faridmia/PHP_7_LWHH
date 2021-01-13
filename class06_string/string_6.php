<?php 


$string = "Quick brown fox Fox jump over the lazy dog";

$offset = strpos($string,"Quick");// case sensative
//$offset = stripos($string,"Quick");// case unsensative
//$offset = strrpos($string,"Quick");// case reverse ulta dik  thake start hobe

if($offset !== false){
    echo "word has found\n";
}else{
    echo "word has not found\n";
}