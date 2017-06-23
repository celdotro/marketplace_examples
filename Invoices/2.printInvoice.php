<?php
/**
 * [RO] Returneaza o factura in format PDF pentru o comanda specificata prin parametru (https://github.com/celdotro/marketplace/wiki/Printare-factura)
 * [EN] Returns an invoice as a PDF file for an order specified as a parameter (https://github.com/celdotro/marketplace/wiki/Print-Invoice)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';

use celmarket\Auth;
Auth::setUserDetails('USERNAME', 'PASSWORD');

use celmarket\Invoices\InvoicesPrint;

#24#
#FUNCTION#
function printInvoice($cmd){
    $object = new InvoicesPrint();

    try{
        $response = $object->printInvoice($cmd);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
printInvoice(123456);