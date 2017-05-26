<?php
include __DIR__ . '/../api_include.php';

use celmarket\Orders\OrdersData;

#15#
#FUNCTION#
function getOrderInfo($order_id){
    $object = new OrdersData();

    try{
        $response = $object->getOrderInfo($order_id);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
getOrderInfo(564076);