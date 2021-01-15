<?php 

function displayOption($options,$selectedvalue){

    

    foreach($options as $option){
        $option = strtolower($option);
        $selected = '';
        if(in_array($option,$selectedvalue)){
           $selected  = "selected";
        }

    printf("<option value='%s' %s>%s</option>\n",$option, $selected, ucwords($option));

    }
}
