<?php
/**
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Orders\OrdersData;


#FUNCTION#
function addOrderObservations($orders_id, $observations){
    $object = new OrdersData();

    try{
        $response = $object->addOrderObservations($orders_id, $observations);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$orders_id = 123456;
$observations = 'ABC';
addOrderObservations($orders_id, $observations);