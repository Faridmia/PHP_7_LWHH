<?php


function custom_error_handler($severity,$msg,$files,$line){
    //echo "Error [{$severity}] : {$msg} in {$files} on line number {$line}";

    switch($severity){
        case E_WARNING:
            echo "Error [{$severity}] : {$msg} in {$files} on line number {$line}";
        
            case E_NOTICE:
                echo "Error [{$severity}] : {$msg} in {$files} on line number {$line}";
                break;
                default:
                echo "Error [{$severity}] : {$msg} in {$files} on line number {$line}";

    }
}

// set_error_handler('custom_error_handler');

// echo substr([1234],3);

// trigger_error("This is an error...");

function division($divident,$divisor){
    if(0 == $divisor){
        trigger_error("Cannot divided by zero...");
    }else{
        return $divident/$divisor;
    }

}

//echo division(8,2);
echo division(8,0);

