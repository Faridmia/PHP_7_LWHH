<?php 
    define("DB_NAME",'C:\xampp\htdocs\oop\crud_project\data\db.txt');
    function seed($filename){

        $data = array(
            array(
                'fname' => 'farid',
                'lname' => 'mia',
                'roll' => 10
            ),
            array(
                'fname' => 'kamal',
                'lname' => 'mia',
                'roll' => 10
            ),
            array(
                'fname' => 'jamal',
                'lname' => 'mia',
                'roll' => 10
            ),
            array(
                'fname' => 'nikhil',
                'lname' => 'mia',
                'roll' => 10
            ),
            array(
                'fname' => 'rubel',
                'lname' => 'mia',
                'roll' => 10
            ),
            array(
                'fname' => 'munsur',
                'lname' => 'mia',
                'roll' => 10
            ),
            array(
                'fname' => 'harun',
                'lname' => 'mia',
                'roll' => 10
            ),
        );

        $serializeData = serialize($data);
        file_put_contents($filename,$serializeData);
    }