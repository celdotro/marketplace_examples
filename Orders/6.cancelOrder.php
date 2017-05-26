<?php
include __DIR__ . '/../api_include.php';

use celmarket\Orders\OrdersCancel;

#25#
#FUNCTION#
function cancelOrder($cmd, $reason){
    $object = new OrdersCancel();

    try{
        $response = $object->cancelOrder($cmd, $reason);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
cancelOrder(564038, 65);