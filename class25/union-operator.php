<?php 

    class Circle{

        function __construct()
        {
            
        }

        function getArea(){
            return 80;
        }
    }

    class Rectangle{

        function __construct()
        {
            
        }

        function getArea(){
            return 40;
        }
    }

    function displayArea(Circle|Rectangle $shape){
        echo "The area of the shape is {$shape->getArea()}";
    }

    $c = new Circle();
    $r = new Rectangle();
    displayArea($c);



?>