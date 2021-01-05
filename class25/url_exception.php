<?php 

    $url = $_SERVER['REQUEST_URI'];
   

    if(preg_match("~^/hello/(\w+)/?$~",$url)){
        echo $url[1];
    }

    if(preg_match("~^/$~",$url)){
        echo "welcome home";
    }

?>