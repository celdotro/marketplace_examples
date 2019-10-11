<?php
/**
 * [RO] Preia lista curierilor (https://github.com/celdotro/marketplace/wiki/Preia-lista-curieri)
 * [EN] Get couriers list (https://github.com/celdotro/marketplace/wiki/Get-couriers)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminInformation;

#FUNCTION#
function getCouriers(){
    $object = new AdminInformation();

    try{
        $response = $object->getCouriers();
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
getCouriers();