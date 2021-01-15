<?php
$filename = "C:\\xampp\\htdocs\\oop\\filefolder\\data\\f1.txt";//directory te double quote dile kaj kore na
if(is_readable($filename)){
    $fp = fopen($filename, "r");


    $line = fgets($fp);//
    //echo $line;

    while($line = fgets($fp)){
        echo $line;
    }

    //rewind($fp);
    fseek($fp,5);
    fseek($fp,-1,SEEK_END);

    while($line = fgets($fp)){
        echo $line."-";
    }

    $data = file($filename);

    print_r($data);

    echo "testi ng data\n";

    echo $data[2];

}





