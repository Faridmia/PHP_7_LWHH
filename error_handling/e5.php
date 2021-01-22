<?php 

echo ini_get("error_log\n");

$headers = "From:system@server.com \r\n";
$headers .= "Content-Type:text/html; charset=ISO-8859-1\r\n";


$date = date("Y:m:d H:j:s");
error_log(" {$date} This is an error message log file \n",3,"/tmp/error.txt");