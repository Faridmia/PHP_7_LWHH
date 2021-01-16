<?php

$d1 = new DateTime('20 May 2007');
$d2 = new DateTime('16 January 2021');

$difference = $d1->diff($d2);

$total_days = $difference->format("%y Years %m Months %d Days...");
echo $total_days;