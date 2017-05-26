<?php
include __DIR__ . '/../api_include.php';

use celmarket\Orders\OrdersUpdate;

#17#
#FUNCTION#
function addProductsToOrder($cmd, $arrModels){
    $object = new OrdersUpdate();

    try{
        $response = $object->addProductsToOrder($cmd, $arrModels);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
addProductsToOrder(492347, array('ROMPOP'));