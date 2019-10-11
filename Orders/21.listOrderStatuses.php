<?php
/**
 * [RO] Listeaza statusurile disponibile ale comenzilor (https://github.com/celdotro/marketplace/wiki/Listare-statusuri-comenzi)
 * [EN] Lists all statuses an order can have (https://github.com/celdotro/marketplace/wiki/List-order-statuses)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Orders\OrdersStatus;

#15#
#FUNCTION#
function listStatuses(){
    $object = new OrdersStatus();

    try{
        $response = $object->listStatuses();
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
listStatuses();