<?php 

    trait myTrait{

        static $number;

        abstract function sayHi();
    }


class MyclassA{

    use myTrait;

    function sayHi()
    {
        echo "hi";
    }
}

class MyclassB{

    use myTrait;

    function sayHi()
    {
        echo "hi update";
    }
}



echo MyclassA::$number = 2;
echo MyclassB::$number = 8;

$object = new MyclassA;

echo $object::$number;








