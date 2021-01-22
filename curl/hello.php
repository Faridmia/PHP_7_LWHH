<?php

    echo "welcome to the beautiful world curl and php";


    if(isset($_POST['secret']) && 'noodles' == $_POST['secret']){
        echo "<br/> please have some noodles..";
    }