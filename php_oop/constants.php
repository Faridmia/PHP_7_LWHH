<?php

class MyClass {
    const VERSION = '1.0';

    public function getVersion() {
        return self::VERSION;
    }
}

$obj = new MyClass();

echo $obj->getVersion();

echo MyClass::VERSION;