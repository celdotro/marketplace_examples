<?php
/**
 * [RO] Seteaza un AWB pentru o comanda (https://github.com/celdotro/marketplace/wiki/Creare-AWB)
 * [EN] Add an AWB for a specific order (https://github.com/celdotro/marketplace/wiki/AWB-Import)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Orders\OrdersAWB;

#24#
#FUNCTION#
function setAwb($orders_id, $courier_id, $awb_number){
    $object = new OrdersAWB();

    try{
        $response = $object->setAwb($orders_id, $courier_id, $awb_number);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
setAwb(123456, 1, '1234567');