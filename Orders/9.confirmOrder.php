<?php
/**
 * [RO] Confirma o comanda existenta (https://github.com/celdotro/marketplace/wiki/Confirmare-comanda)
 * [EN] Confirms an existing order (https://github.com/celdotro/marketplace/wiki/Confirm-order)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';

use celmarket\Auth;
Auth::setUserDetails('USERNAME', 'PASSWORD');

use celmarket\Orders\OrdersStatus;

#25#
#FUNCTION#
function confirmOrder($cmd){
    $object = new OrdersStatus();

    try{
        $response = $object->confirmOrder($cmd);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
confirmOrder(123456);