<?php


interface Mail {
    public function sendMail();
}

class Report implements Mail {

    public function sendMail() {
        echo "sendmail";
    }
}


$obj = new Report();

$obj->sendMail();