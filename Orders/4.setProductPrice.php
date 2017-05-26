<?php
include __DIR__ . '/../api_include.php';

use celmarket\Orders\OrdersUpdate;

#16#
#FUNCTION#
function setProductPrice($cmd, $model, $newPrice){
    $object = new OrdersUpdate();

    try{
        $response = $object->setProductPrice($cmd, $model, $newPrice);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
setProductPrice(492347, 'ROMPOP', 8923);