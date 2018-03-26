<?php
/**
 * [RO] Trimite o notificare prin care se doreste eliminarea facturii (https://github.com/celdotro/marketplace/wiki/Notifica-eliminarea-facturii)
 * [EN] Send a notification in order to ask for an invoice to be removed
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Email\EmailOrder;

#FUNCTION#
function notifyInvoiceRemoval($orders_id, $reason){
    $object = new EmailOrder();

    try{
        $response = $object->notifyInvoiceRemoval($orders_id, $reason);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$orders_id = 123456;
$reason = 'Motiv';
notifyInvoiceRemoval($orders_id, $reason);