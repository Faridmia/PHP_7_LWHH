<?php

$filename = 'C:\xampp\htdocs\oop\filefolder\data\f3.txt';

file_put_contents($filename,"Mars\n",FILE_APPEND | LOCK_EX);
file_put_contents($filename,"Jupitar\n",FILE_APPEND | LOCK_EX);
file_put_contents($filename,"bangladesh\n",FILE_APPEND | LOCK_EX);
