<?php
/**
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Orders\OrdersUpdate;

#25#
#FUNCTION#
function addTransportTax($oid, $taxValue){
    $object = new OrdersUpdate();

    try{
        $response = $object->addTransportTax($oid, $taxValue);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
addTransportTax(113534, 80);