<?php
include __DIR__ . '/../api_include.php';

use celmarket\Orders\OrdersUpdate;

#18#
#FUNCTION#
function removeProductsFromOrder($cmd, $arrModels){
    $object = new OrdersUpdate();

    try{
        $response = $object->removeProductsFromOrder($cmd, $arrModels);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
removeProductsFromOrder(492347, array('ROMPOP'));