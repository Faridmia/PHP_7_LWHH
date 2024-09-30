<?php

interface Car {
    public function getType();
}

class Sedan implements Car {

    public function getType() {
        return "sedan";
    }
    
}

class Suv implements Car {

    public function getType() {
        return "suv";
    }
    
}

class CarFactory {

    public static function createCar( $type ) {
        if( $type == 'sedan') {
            return new Sedan();
        }
        if( $type == 'suv') {
            return new Suv();
        }

        if ($type == 'sedan') {
            return new Sedan();
        } elseif ($type == 'suv') {
            return new SUV();
        }

        throw new Exception("invalid car type");
    }
}

// sedan car type 

$sedan = CarFactory::createCar('sedan');

echo $sedan->getType(); // Output: Sedan

$suv = CarFactory::createCar('suv');

echo $suv->getType(); // Output: suv