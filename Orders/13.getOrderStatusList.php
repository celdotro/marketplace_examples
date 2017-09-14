<?php
/**
 * [RO] Preluare lista de statusuri ale comenzilor (https://github.com/celdotro/marketplace/wiki/Preluare-lista-de-statusuri-pentru-comenzi)
 * [EN] Retrieves the list of statuses for orders (https://github.com/celdotro/marketplace/wiki/Get-status-list-for-orders)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Orders\OrdersStatus;

#15#
#FUNCTION#
function getOrderStatusList(){
    $object = new OrdersStatus();

    try{
        $response = $object->getOrderStatusList();
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
getOrderStatusList();