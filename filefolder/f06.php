<?php


$filename = 'C:\xampp\htdocs\oop\filefolder\data\f5.txt';

$students = array(
    array(
        'fname' => 'farid',
        'lname' => 'mia',
        'age' => '20',
        'class' => '16',
        'roll' => '2040'
    ),
    array(
        'fname' => 'tangila',
        'lname' => 'akter',
        'age' => '20',
        'class' => '16',
        'roll' => '2040'
    ),
    array(
        'fname' => 'tarek',
        'lname' => 'mia',
        'age' => '20',
        'class' => '16',
        'roll' => '2040'
    ),
    array(
        'fname' => 'tabassum',
        'lname' => 'akter',
        'age' => '20',
        'class' => '16',
        'roll' => '2040'
    ),
);

// $fp = fopen($filename,"w");

// foreach($students as $student){

//     $data = sprintf("%s,%s,%s,%s,%s\n",$student['fname'],$student['lname'],$student['age'],$student['class'],$student['roll']);

//     fwrite($fp,$data);

// }

// fclose($fp);

/*$fp = fopen($filename,"w");
foreach($students as $student){

     $data = sprintf("%s,%s,%s,%s,%s\n",$student['fname'],$student['lname'],$student['age'],$student['class'],$student['roll']);

    fwrite($fp,$data);

    fputcsv($fp,$student);

}

fclose($fp);*/

/*$fp = fopen($filename,"r");

while($data = fgets($fp)){
    $student = explode(",",$data);
    printf("Name = %s %s\nage = %s\nclass = %s\nRoll = %s\n",$student[0],$student[1],$student[2],$student[3],$student[4]);
}

fclose($fp);*/


/*$fp = fopen($filename,"r");

while($student = fgetcsv($fp)){
   // $student = explode(",",$data);
    printf("Name = %s %s\nage = %s\nclass = %s\nRoll = %s\n",$student[0],$student[1],$student[2],$student[3],$student[4]);
}

fclose($fp);
/*/
// $students = array(
//     'fname' => 'kamal',
//     'lname' => 'mia',
//     'age' => '20',
//     'class' => '16',
//     'roll' => '2040'
// );

// $fp = fopen($filename,"a");

// fputcsv($fp,$students);

// fclose($fp);

$data = file($filename);
print_r($data);
unset($data[1]);

$fp = fopen($filename,"w");

foreach($data as $line){
    if(rtrim($line) != ''){
        $line = trim($line);
        fwrite($fp,$line."\n");
    }
}

fclose($fp);




