<?php
/**
 * [RO] Listeaza statusurile produselor din comanda (https://github.com/celdotro/marketplace/wiki/Listeaza-statusurile-produselor-din-comanda)
 * [EN] List order's product statuses (https://github.com/celdotro/marketplace/wiki/List-order-product-statuses)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Orders\OrdersStatus;

#15#
#FUNCTION#
function listProductStatuses(){
    $object = new OrdersStatus();

    try{
        $response = $object->listProductStatuses();
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
listProductStatuses();