<?php 


function x($a){
    y($a);
}

function y($b){
    z($b*2);
}

function z($c){
    
    if($c < 20){
        trigger_error("Too small {$c}\n");
    }else{
        echo "{$c} is okay\n";
    }

   // debug_print_backtrace();
    debug_print_backtrace(0,3);

    //print_r(debug_backtrace());
}

function w($d,$e){
    
    x($d+ $e);
}

z(23);
w(2,3);