<?php

ini_set('display_errors',0);
ini_set('memory_limit','1M');

register_shutdown_function('fatal_error_handler');

function fatal_error_handler(){
    $error_list = error_get_last();

    if($error_list){
        echo "Fatal error handler";
    }
}


echo str_repeat("*",2**21);
//no_function();