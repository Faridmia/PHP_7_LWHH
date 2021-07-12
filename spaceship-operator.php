<?php 

$x = 5;
$y = 5;

$result = $x <=> $y;

if($result == 1) {
    echo "{$x} is grater than {$y}"; 
}
if($result == 0) {
    echo "{$x} is equal  {$y}"; 
}
if($result == -1) {
    echo "{$x} is smaller than {$y}"; 
}