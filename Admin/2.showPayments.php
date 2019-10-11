<?php
/**
 * [RO] Returneaza date despre platile efectuate de Corsar Online catre afiliat pentru o anumita factura si comanda (https://github.com/celdotro/marketplace/wiki/Date-plati-pentru-o-factura)
 * [EN] Returns data about the payments done in an affiliate's account for a specific invoice (https://github.com/celdotro/marketplace/wiki/Detailed-payment-data-for-an-invoice)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminPayments;

#0#
#FUNCTION#
function showPayments($numInvoice, $numOrder){
    $object = new AdminPayments();

    try{
        $response = $object->showPayments($numInvoice, $numOrder);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$numInvoice = 1;
$numOrder = 1;

showPayments($numInvoice, $numOrder);