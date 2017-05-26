<?php
/**
 * [RO] Genereaza dispozitia de facturare pentru o comanda trimisa ca parametru
 * [EN] Generates the invoice disposition for an order specified as a parameter
 */
include __DIR__ . '/../api_include.php';

use celmarket\Invoices\InvoicesGenerate;

#23#
#FUNCTION#
function generateInvoiceDisp($cmd){
    $object = new InvoicesGenerate();

    try{
        $response = $object->generateInvoiceDisp($cmd);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
generateInvoiceDisp(564019);