<?php
/**
 * [RO] Returneaza informatiile aferente unei comenzi specificata prin parametru (https://github.com/celdotro/marketplace/wiki/Datele-comenzii)
 * [EN] Returns all relevant informations for an order specified as a parameter (https://github.com/celdotro/marketplace/wiki/Order-data)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Orders\OrdersData;

#15#
#FUNCTION#
function getOrderInfo($order_id, $original_delivery){
    $object = new OrdersData();

    try{
        $response = $object->getOrderInfo($order_id, $original_delivery);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
getOrderInfo(2000638, 1);