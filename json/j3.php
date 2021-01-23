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

    echo json_encode($object);