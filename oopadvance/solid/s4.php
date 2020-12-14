<?php 

    interface Vehicle{
        function getMileage();
        function getName();
        function getPrice();
    }

    interface twoWheelers{

    }

    interface fourWheelers{
        
    }

    interface sixWheelers{
        
    }

    class Motorcycle implements Vehicle, twoWheelers{

    }

    class Truck implements Vehicle,sixWheelers{
        
    }

?>