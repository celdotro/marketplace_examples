<?php
/**
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Orders\OrdersData;

#15#
#FUNCTION#
function banClient($orders_id, $motiv){
    $object = new OrdersData();

    try{
        $response = $object->banClient($orders_id, $motiv);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
banClient(2000605, 'Motiv de ban client');