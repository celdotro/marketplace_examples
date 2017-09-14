<?php
/**
 * [RO] Genereaza factura pentru o comanda trimisa ca parametru (https://github.com/celdotro/marketplace/wiki/Generare-factura)
 * [EN] Generates the invoice for an order specified as a parameter (https://github.com/celdotro/marketplace/wiki/Generate-invoice)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Invoices\InvoicesGenerate;

#23#
#FUNCTION#
function generateInvoice($cmd){
    $object = new InvoicesGenerate();

    try{
        $response = $object->generateInvoice($cmd);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
generateInvoice(123456);