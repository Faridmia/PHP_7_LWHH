<?php


 $entities = opendir(getcwd());

 while(false !== ($entry = readdir($entities))){

    echo $entry."\n";
 }