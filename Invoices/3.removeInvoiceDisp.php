<?php
/**
 * [RO] Sterge dispozitia de facturare pentru o comanda
 * [EN] Deletes the invoice disposition for an order
 */
include __DIR__ . '/../api_include.php';

use celmarket\Auth;
Auth::setUserDetails('USERNAME', 'PASSWORD');

use celmarket\Invoices\InvoicesRemove;

#32#
#FUNCTION#
function removeInvoice($cmd){
    $object = new InvoicesRemove();

    try{
        $response = $object->removeInvoice($cmd);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
removeInvoice(123456);