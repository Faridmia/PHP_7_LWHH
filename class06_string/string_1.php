<?php
$name = "farid";

$string01 = "My name is $name \n \t new data \n";

echo $string01;

$heredoc = <<<EOD
    DATA ONE
    NEW TEXT
    MY NAME IS $name \n
EOD;
echo $heredoc;