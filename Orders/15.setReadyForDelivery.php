<?php
/**
 * [RO] Seteaza o comanda ca fiind gata de livrare (https://github.com/celdotro/marketplace/wiki/Seteaza-gata-de-livrare)
 * [EN] Set an order as ready for delivery (https://github.com/celdotro/marketplace/wiki/Set-order-as-ready-for-delivery)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Orders\OrdersStatus;

#25#
#FUNCTION#
function setReadyForDelivery($cmd){
    $object = new OrdersStatus();

    try{
        $response = $object->setReadyForDelivery($cmd);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
setReadyForDelivery(123456);