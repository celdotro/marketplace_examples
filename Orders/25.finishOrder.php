<?php
/**
 * [RO] Finalizeaza o comanda (https://github.com/celdotro/marketplace/wiki/Finalizeaza-comanda)
 * [EN] Finishes an order (https://github.com/celdotro/marketplace/wiki/Finish-order)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Orders\OrdersStatus;

#25#
#FUNCTION#
function finishOrder($orders_id){
    $object = new OrdersStatus();

    try{
        $response = $object->finishOrder($orders_id);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
finishOrder(123456);