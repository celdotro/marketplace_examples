<?php
/**
 * [RO] Genereaza factura pentru o comanda trimisa ca parametru
 * [EN] Generates the invoice for an order specified as a parameter
 */
include __DIR__ . '/../api_include.php';

use celmarket\Auth;
Auth::setUserDetails('USERNAME', 'PASSWORD');

use celmarket\Invoices\InvoicesGenerate;

#23#
#FUNCTION#
function generateInvoice($cmd){
    $object = new InvoicesGenerate();

    try{
        $response = $object->generateInvoiceDisp($cmd);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
generateInvoice(123456);