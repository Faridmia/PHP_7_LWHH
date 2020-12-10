<?php

interface BaseStudent{
    function displayName();
}

class improveStudent implements BaseStudent{
    private $name;
    private $title;

    function __construct($name,$title)
    {
        
        $this->name = $name;
        $this->title = $title;
        
    }

    function displayName(){
        echo "hello from {$this->name} .{$this->title}";
    }
}

class Student implements BaseStudent{
    private $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    function displayName(){
        echo "hello from ".$this->name;
    }
}

class StudentManager{
    function introduceStudent(BaseStudent $student){
        $student->displayName();
    }
}

//$st = new Student("John Doe");
$ist = new improveStudent("Mr","John Doe");

$sm = new StudentManager();

$sm->introduceStudent($ist);