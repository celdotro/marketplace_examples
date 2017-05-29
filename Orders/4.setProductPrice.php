<?php
/**
 * [RO] Seteaza un pret nou pentru un produs al unei comenzi
 * [EN] Sets a new price for a product in an order
 */
include __DIR__ . '/../api_include.php';

use celmarket\Auth;
Auth::setUserDetails('USERNAME', 'PASSWORD');

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