<?php 

echo time()."\n";
echo mktime(0,0,0,12,1,2018)."\n";
date_default_timezone_set('Asia/Dhaka');

echo mktime(0,0,0,12,1,2018)."\n";
echo gmmktime(0,0,0,12,1,2018)."\n";

echo (18800-800)/(60*60)."\n";

echo  (mktime(0,0,0,1,16,2021) - mktime(0,0,0,1,15,2018)) / (24*60*60);