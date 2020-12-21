<?php 
    class Invoice{

        function generatePDF(){
            return "Pdf Generated";
        }
    }

    class Order{

        private $invoice;

        function generateInvoice(){
            $this->invoice = new Invoice;
        }

        function getInvoice(){
            return $this->invoice;
            return new Invoice();
        }


    }

$order = new Order();
$order->generateInvoice();
// null safe operator
echo $order->getInvoice()?->generatePDF() ?? "Failed to generated pdf";

?>