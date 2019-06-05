<?php
/**
 * [RO] Marcheaza o comanda ca fiind disputata (https://github.com/celdotro/marketplace/wiki/Disputa-comanda)
 * [EN] Mark an order as disputed (https://github.com/celdotro/marketplace/wiki/Dispute-order)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Orders\OrdersUpdate;


#FUNCTION#
function makeOrderDisputed($order_id){
    $object = new OrdersUpdate();

    try{
        $response = $object->makeOrderDisputed($order_id);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
makeOrderDisputed(2000624);