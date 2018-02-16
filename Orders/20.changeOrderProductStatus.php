<?php
/**
 * [RO] Schimba statusul unui produs dintr-o comanda
 * [EN] Changes the status of a product from a specific order
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';



use celmarket\Orders\OrdersUpdate;

#15#
#FUNCTION#
function changeOrderProductStatus($orders_products_id, $status){
    $object = new OrdersUpdate();

    try{
        $response = $object->changeOrderProductStatus($orders_products_id, $status);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$orders_products_id = 1234;
$status = 0;// 0 4 5

changeOrderProductStatus($orders_products_id, $status);