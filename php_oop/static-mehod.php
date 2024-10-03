<?php

class Foo {

    public static $my_static = 'Foo';

    public static function staticValue() {
        return static::$my_static;  // late static binding
    }
}

class Bar extends Foo {
    public static $my_static = 'bar';
}


$obj = new Bar();

echo $obj->staticValue();