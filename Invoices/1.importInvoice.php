<?php
/**
 * [RO] Genereaza o noua factura (https://github.com/celdotro/marketplace/wiki/Adaugare-factura)
 * [EN] Generates a new invoice (https://github.com/celdotro/marketplace/wiki/Add-invoice)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Invoices\InvoicesData;

#24#
#FUNCTION#
function setInvoiceData($cmd, $serie, $nr){
    $object = new InvoicesData();

    try{
        $response = $object->setInvoiceData($cmd, $serie, $nr);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$cmd = 123456;
$serie = 'AA';
$nr = 11;
setInvoiceData($cmd, $serie, $nr);