<?php

class Student{

    function __construct(private String $firstName,private String $lastName,$age = 20)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    public function getName(){
        return "{$this->firstName} {$this->lastName}";
    }

    public function getAge(){
        return " {$this->age} years  old";
    }
}

$object = new Student("rakib","talukdar");

echo $object->getName();
echo $object->getAge();