 <?php

$data = "{\"country\":\"বাংলাদেশ\"}";

print_r(json_decode($data,1));

echo json_last_error();
