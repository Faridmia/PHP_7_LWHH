<?php 

// sinlgeton instance

class SomeClass{

    static $instance;
    private $name;

    function __construct($name)
    {
        $this->name = $name;
        echo "New Instance created\n";
    }

    static function getInstance($name = null){
        
        if(!self::$instance){
            if($name){
                self::$instance = new SomeClass($name);
            }else{
                self::$instance = new SomeClass('');
            }
        }else{
            echo "Old instance created\n";
        }

        return self::$instance;
    }

    function sayName(){
        echo $this->name."\n";
    }
}

$c1 = SomeClass::getInstance('farid');
$c2 = SomeClass::getInstance('rahim');
$c3 = SomeClass::getInstance();

$c1->sayName();
$c2->sayName();
$c3->sayName();