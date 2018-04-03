<?php
/**
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Orders\OrdersData;

#25#
#FUNCTION#
function printOrder($orders_id){
    $object = new OrdersData();

    try{
        $response = $object->printOrder($orders_id);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
#EXAMPLE#
printOrder(113655);