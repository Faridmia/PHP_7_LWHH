<?php 

   abstract class Bird{

       abstract function sleep();
       abstract function eat();
       
   } 

   abstract class Flybird extends Bird{

        abstract function fly();
   }

   abstract class Walkingbird extends Bird{

    abstract function walk();
}

    class BirdManager{
        function maintainBird(Bird $b){
            $b->eat();
            $b->sleep();
        }

        function moveflyBird(Flybird $fb){
            $fb->fly();
        }

        function movewalkBird(Walkingbird $fb){
            $fb->walk();
        }
    }

   class Eagle extends Flybird{

        function eat()
        {
            
        }
        function sleep(){

        }

        function fly()
        {
            
        }
   }

   class Penguin extends Walkingbird{

        function eat()
        {
            echo "Penguin Eat rice";
        }
        function sleep(){

        }

        function walk()
        {
            
        }
   }


   $pen = new Penguin();
   $pen->eat();



?>