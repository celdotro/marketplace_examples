<?php
/**
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';



use celmarket\Orders\OrdersData;

#25#
#FUNCTION#
function printProforma($orders_id){
    $object = new OrdersData();

    try{
        $response = $object->printProforma($orders_id);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
#EXAMPLE#
printProforma(113652);