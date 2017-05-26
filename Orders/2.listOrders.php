<?php
include __DIR__ . '/../api_include.php';

use celmarket\Orders\OrdersList;

#10#
#FUNCTION#
function getOrdersList($start, $limit, $data, $sign, $customer){
    $object = new OrdersList();

    try{
        $response = $object->listOrders($start, $limit, $data, $sign, $customer);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
getOrdersList(0, 15, '2017-04-04', 'ee', 'client1');