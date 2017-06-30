<?php
/**
 * [RO] Returneaza date despre platile efectuate de Corsar Online catre afiliat pentru o anumita factura si comanda
 * [EN] Returns data about the payments done in an affiliate's account for a specific invoice
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';

use celmarket\Auth;
Auth::setUserDetails('USERNAME', 'PASSWORD');

use celmarket\Admin\Payments;

#0#
#FUNCTION#
function showPayments($numInvoice, $numOrder){
    $object = new Payments();

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