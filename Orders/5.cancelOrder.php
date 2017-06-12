<?php
/**
 * [RO] Anuleaza o comanda. Are nevoie de un motiv valid.
 * [EN] Cancels an order. It's necessary to use a valid reason.
 */
include __DIR__ . '/../api_include.php';

use celmarket\Auth;
Auth::setUserDetails('USERNAME', 'PASSWORD');

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
cancelOrder(123456, 65);