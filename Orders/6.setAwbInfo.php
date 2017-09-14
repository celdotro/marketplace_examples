<?php
/**
 * [RO] Seteaza datele comenzii necesare generarii de AWB-uri (https://github.com/celdotro/marketplace/wiki/Setare-date-AWB)
 * [EN] Sets an orders data required for AWB generation (https://github.com/celdotro/marketplace/wiki/Set-AWB-Info)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Orders\OrdersAWBInfo;

#33#
#FUNCTION#
function setAwbInfo($cmd, $courier, $idAdresaRidicare, $plic = null, $packages = null, $kg = null, $saturdayDelivery = 0){
    $object = new OrdersAWBInfo(); 

    try{
        $response = $object->setAwbInfo($cmd, $courier, $idAdresaRidicare, $plic, $packages, $kg, $saturdayDelivery);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
setAwbInfo(123456,'Courier', 14, 1, 2, 1, 0);