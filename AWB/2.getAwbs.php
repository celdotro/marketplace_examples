<?php
/**
 * [RO] Listeaza toate AWB-urile unei comenzi (https://github.com/celdotro/marketplace/wiki/Listare-AWB)
 * [EN] Lists all order AWBs (https://github.com/celdotro/marketplace/wiki/List-AWBs)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Orders\OrdersAWB;

#24#
#FUNCTION#
function getAwbs($orders_id){
    $object = new OrdersAWB();

    try{
        $response = $object->getAwbs($orders_id);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
getAwbs(1234);