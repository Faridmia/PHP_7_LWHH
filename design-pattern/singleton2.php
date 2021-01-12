<?php 

// sinlgeton instance

class FileWritter{

    static $instance = [];
    private $filename;

    function __construct($filename)
    {
        $this->filename = $filename;
       
    }

    static function getInstance($filename){
        
        if(!isset(self::$instance[$filename])){
            self::$instance[$filename] = new FileWritter($filename);
           
        }

        return self::$instance[$filename];
    }

    function writeData(){
        echo "write data to {$this->filename}\n";
    }

    static function dump(){
        print_r(self::$instance);
    }
}

$c1 = FileWritter::getInstance('/tmp/abc.txt');
$c2 = FileWritter::getInstance('/tmp/abcd.txt');
$c3 = FileWritter::getInstance('/tmp/abc.txt');
$c4 = FileWritter::getInstance('/tmp/abcd.txt');
FileWritter::getInstance('/tmp/ab.txt')->writeData("some data added");

$c1->writeData('some data');
$c2->writeData('some data');
$c3->writeData('some data');
$c4->writeData('some data');

FileWritter::dump();