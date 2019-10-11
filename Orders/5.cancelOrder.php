<?php
/**
 * [RO] Anuleaza o comanda. Are nevoie de un motiv valid. (https://github.com/celdotro/marketplace/wiki/Anularea-comenzii)
 * [EN] Cancels an order. It's necessary to use a valid reason. (https://github.com/celdotro/marketplace/wiki/Cancel-Order)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Orders\OrdersStatus;

#25#
#FUNCTION#
function cancelOrder($cmd, $motiv = 0, $observatii = ''){
    $object = new OrdersStatus();

    try{
        $response = $object->cancelOrder($cmd, $motiv, $observatii);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
cancelOrder(123456, 65, '');