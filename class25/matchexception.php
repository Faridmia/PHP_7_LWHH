<?php 
    $default = "avocado";


    $data = match($default){
        "orange","lemon","apple" => 'vitamin c',
        "mango","guyava" => "vitamin A",
        "avocado","kiki" => "vitamin e",
        "beef" => throw new Exception("Invalid first"),

    };

    echo $data;


?>