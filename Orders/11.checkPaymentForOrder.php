<?php
/**
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';

use celmarket\Auth;
Auth::setUserDetails('USERNAME', 'PASSWORD');

use celmarket\Orders\OrdersData;

#15#
#FUNCTION#
function checkPaymentForOrder($order_id){
    $object = new OrdersData();

    try{
        $response = $object->checkPaymentForOrder($order_id);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
checkPaymentForOrder(123456);