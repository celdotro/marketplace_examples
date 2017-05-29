<?php
/**
 * [RO] Returneaza informatiile aferente unei comenzi specificata prin parametru
 * [EN] Returns all relevant informations for an order specified as a parameter
 */
include __DIR__ . '/../api_include.php';

use celmarket\Auth;
Auth::setUserDetails('USERNAME', 'PASSWORD');

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