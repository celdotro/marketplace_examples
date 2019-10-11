<?php
/**
 * [RO] Reactiveaza o comanda anulata (https://github.com/celdotro/marketplace/wiki/Reactiveaza-comanda)
 * [EN] Reactivates a cancelled order (https://github.com/celdotro/marketplace/wiki/Reactivate-order)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




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