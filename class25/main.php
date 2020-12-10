<?php
    //include 'spaceship.php';

function autoload($name){

    if(strpos($name,'Planet_') !==false){
        $filename = str_replace("Planet_","",$name);
        include strtolower("planets/{$filename}.php");
    }else{
        include strtolower("{$name}.php");
    }
}

spl_autoload_register('autoload');

(new Planet_Mars)->getName();                                                             
(new Spaceship)->launch();                                                             
(new Bike)->gettype();                                                             