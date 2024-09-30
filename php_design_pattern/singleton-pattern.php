<?php
class Logger {

    private static $instance = null;

    private $fileHandle;

    private function __construct() {
        $this->fileHandle = fopen('log.txt','a');
    }

    public static function getInstance() {
        if( self::$instance === null ) {
            self::$instance = new Logger();
        }

        return self::$instance;
    }

    public function log($message) {
        $time = date('Y-m-d H:i:s');
        fwrite($this->fileHandle, "[$time] - $message" . PHP_EOL);
    }

    public function __destruct() {
        fclose($this->fileHandle);
    }
}

$logger1 = Logger::getInstance();
$logger1->log("hello text 1");

$logger2 = Logger::getInstance();
$logger2->log("hello text 2");
