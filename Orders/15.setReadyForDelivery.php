<?php
/**
 *
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