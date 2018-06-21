<?php
/**
 * [RO] Adauga un cod MCC in contul curent (https://github.com/celdotro/marketplace/wiki/Atribuie-cod-MCC)
 * [EN] Add an MCC code to current account (https://github.com/celdotro/marketplace/wiki/Add-MCC-Code)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminInformation;

#FUNCTION#
function addMccCode($mcc){
    $object = new AdminInformation();

    try{
        $response = $object->addMccCode($mcc);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$mcc = '0742';
addMccCode($mcc);