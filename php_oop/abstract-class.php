<?php

// abstract class

abstract class Shape {

    abstract public function calculateArea();

    public function display() {
        echo "This is a shape..";
    }
}

class Circle extends Shape {

    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {

        return pi() * pow( $this->radius, 2 );
    }

}

class Rectangle extends Shape {

    private $width;
    private $height;

    public function __construct ( $width, $height ) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() {
        return $this->width * $this->height;
    }
}


// create object

$circle = new Circle( 5 );

$rectangle = new Rectangle( 4, 5 );

echo "Circle Area: " . $circle->calculateArea() . "<br>";  // output : Circle Area: 78.539816339745
echo "Rectangle Area: " . $rectangle->calculateArea() . "<br>";  // output: Rectangle Area: 24