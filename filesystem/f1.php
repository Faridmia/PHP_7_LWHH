<?php
// directory ber korar jonno
//echo getcwd();

//directory te ki ki file ase dakhar jonono

$entities = scandir(getcwd());

// echo "<pre>";

// print_r($entities);
// echo '</pre>';

foreach($entities as $entry){
    if("."!= $entry && ".."!=$entry){
        if(is_dir($entry)){
            echo "[d] {$entry} \n";
        }else{
            echo "[f] {$entry} \n";
        }
    }
}


function countDir($dir){

    $count = 0;
    $entities = scandir($dir);
    foreach($entities as $entry){
        if("."!= $entry && ".."!=$entry){
            if(is_dir($entry)){
               $count++;
            }
        }
    }

    return $count;


}

echo countDir(getcwd());