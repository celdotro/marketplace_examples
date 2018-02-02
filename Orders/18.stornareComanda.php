<?php
/**
 * [RO] Storneaza comanda (https://github.com/celdotro/marketplace/wiki/Stornare-comanda)
 * [EN] Order cancellation (https://github.com/celdotro/marketplace/wiki/Order-cancellation)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';



use celmarket\Orders\OrdersStatus;

#15#
#FUNCTION#
function stornareComanda($orders_id){
    $object = new OrdersStatus();

    try{
        $response = $object->stornareComanda($orders_id);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$orders_id = 123456;
stornareComanda($orders_id);