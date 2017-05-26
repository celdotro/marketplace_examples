<?php
include __DIR__ . '/../api_include.php';

use celmarket\Orders\OrdersAWBInfo;

#24#
#FUNCTION#
function setAwbInfo($cmd, $courier, $plic = null, $packages = null, $kg = null){
    $object = new OrdersAWBInfo();

    try{
        $response = $object->setAwbInfo($cmd, $courier, $plic, $packages, $kg);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
setAwbInfo(564074,'NemoExpress', 1, 2, 1);