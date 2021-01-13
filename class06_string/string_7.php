<?php

$string = "Quick Brown brown fox Fox jump over the lazy dog";

$string_replace = str_replace(array("brown","fox"),array("word","cat"),$string,$count);
$string_replace = str_ireplace(array("brown","fox"),array("word","cat"),$string,$count);

echo $string_replace;
