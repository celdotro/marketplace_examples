<?php
include __DIR__ . '/../api_include.php';

use celmarket\Invoices\InvoicesPrint;

#24#
#FUNCTION#
function printInvoice($cmd, $check){
    $object = new InvoicesPrint();

    try{
        $response = $object->printInvoice($cmd, $check);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
printInvoice(564074, false);