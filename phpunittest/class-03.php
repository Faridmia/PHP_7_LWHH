<?php

function scope(){

    $value = 1;
    $new_value = 5;
   // $checkscope = function () use (&$value,$new_value){ 
    $checkscope = function ($anothervalue) use (&$value,$new_value){ // pareent function ar value annonemus  function a call korte hole use arpor value dite hobe . amra jodi default value change korte chai tahole ata change hobe na karon by value hisabe set thake. R ADDRESS hisabe dile change hobe.
        echo $value;
        echo PHP_EOL;
        echo $new_value;
        $value = 10;
        echo PHP_EOL;
        echo $anothervalue;
    };

    $checkscope(30);
    echo PHP_EOL;
    echo $value;
    echo PHP_EOL;

}

scope();