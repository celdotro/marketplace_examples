<?php
/**
 * [RO] Returneaza o factura in format PDF pentru o comanda specificata prin parametru. Optional, se poate verifica stocul existent ianinte de tiparire.
 * [EN] Returns an invoice as a PDF file for an order specified as a parameter. Optionally it checks the existing product stock before printing.
 */
include __DIR__ . '/../api_include.php';

use celmarket\Invoices\InvoicesPrint;

#24#
#FUNCTION#
function printInvoice($cmd, $check = null){
    $object = new InvoicesPrint();

    try{
        $response = $object->printInvoice($cmd, $check = null);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
printInvoice(564074, false);