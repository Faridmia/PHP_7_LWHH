<?php

interface PaymentGateway{
    function sendPayment($payment);
}

class PaymentProcessor{
    private $gateway;

    function __construct(PaymentGateway $pg)
    {
        $this->gateway = $pg;
    }

    function purchaseProduct($amount){
        $this->gateway->sendPayment($amount);
    }
}

class Paypal implements PaymentGateway{

    function sendPayment($payment){
        echo "{$payment} processed.....paypal";
    }
}

class Stripe{

    function makePayment($amount,$currency = null){
        function sendPayment($amount){
            echo "{$amount} processed.....Strive";
        }
    }
}

class StripeAdapter implements PaymentGateway{

    private $stripe;

    function __construct(Stripe $stripe)
    {
        $this->stripe = $stripe;
    }

    function sendPayment($payment){
        $this->stripe->makePayment($payment);
    }
}

$Paypal = new Paypal();
$strive = new Stripe();
$sa = new StripeAdapter($strive);
$pp = new PaymentProcessor($Paypal);
$pp->purchaseProduct('45');



// adaptar ager class ta ka implement korlo and ak e sathe notun class tar method take se use korlo

// adapter hotce akta class ar sathe ar akta class ar brigging tory kore oi class take basically same interface dea use kora jai



