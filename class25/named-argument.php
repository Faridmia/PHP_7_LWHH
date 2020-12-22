<?php 

    function sayName($firstname,$lastname = '',$title = 'Mr.'){
        echo "Hello {$firstname} {$lastname} {$title} Comes from Faridpur";
    }

    $users = array(

        'title' => 'md',
        'lastname' => 'mia',
        'firstname' => 'farid'
    );

    //sayName(...$users);
    sayName(firstname:'uddin',title:'Md');

?>