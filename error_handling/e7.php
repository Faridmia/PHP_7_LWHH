<?php 


    $person = [
        'name' => 'XYZ',
        'id' => '4565657',
        'age' => 13,
        'sex' => 'Fm'

    ];

    function processMaternityLeave($person){
        if($person['age'] < 18 ){
            throw  new Exception("Too Young\n");
        }
        elseif('F' == $person['sex']){
            echo "Processed\n";
        }else{
           throw new genderMissmatchException($person);
        }

    }

    class genderMissmatchException extends Exception{
        private $person;

        function __construct($person)
        {
            $this->person = $person;
            parent::__construct("Gender Mismatch\n");
        }

        function getDetailsMessage(){
            echo "Gender missmatch for person with {$this->person['id']}\n";
        }
    }

    try{
        processMaternityLeave($person);
    }
    catch(genderMissmatchException $e){
        echo $e->getMessage();
        echo $e->getDetailsMessage();

    }
    catch(Exception $e){
        echo "other exception\n";
        echo $e->getMessage();
    }
    

