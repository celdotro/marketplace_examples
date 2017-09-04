<?php
/**
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';

use celmarket\Auth;
Auth::setUserDetails('USERNAME', 'PASSWORD');

use celmarket\Orders\OrdersStatus;

#15#
#FUNCTION#
function reactivateOrder($cmd){
    $object = new OrdersStatus();

    try{
        $response = $object->reactivateOrder($cmd);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
reactivateOrder(123456);