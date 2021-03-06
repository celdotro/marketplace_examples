<?php
/**
 * [RO] Printeaza un AWB (https://github.com/celdotro/marketplace/wiki/Printare-AWB)
 * [EN] Print an AWB (https://github.com/celdotro/marketplace/wiki/AWB-Print)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Orders\OrdersAWB;

#24#
#FUNCTION#
function printAwb($awb_id){
    $object = new OrdersAWB();

    try{
        $response = $object->printAwb($awb_id);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
printAwb('e59b2779414e8a2ab9f9c753cb33ef39');