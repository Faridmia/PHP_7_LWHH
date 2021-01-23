<?php

    class Person{

        public $firstname;
        public $lastname;
        private $email;

        function sayHi(){

        }
    }

    $object = new Person();

    $object->firstname= 'Farid';
    $object->lastname = 'mia';

    //echo json_encode($object);
    $jsondata = json_encode($object);

   // $jsonDecodeData = json_decode($jsondata);
    $jsonDecodeData = json_decode($jsondata,true); // json object k array banate hole true likte hobe default object hisabe thake

    print_r($jsonDecodeData);

