<?php

define("DB_HOST",'localhost');
define("DB_USER",'root');
define("DB_PASS",'');
define("DB_NAME",'mysql_extra');

$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

//$result = mysqli_query($conn,"CALL get_student_by_class_and_section(1,'A');");
mysqli_query($conn,"CALL get_mfc_cs(1,'A',@tf,@tm);");

$result = mysqli_query($conn,"SELECT @tm as totalMale, @tf as totalFemale;");

while($data = mysqli_fetch_assoc($result)){

    print_r($data);

    echo $data['totalMale'];
}