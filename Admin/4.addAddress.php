<?php
/**
 * [RO] Adauga o adresa pentru ridicarea coletelor de catre curieri (https://github.com/celdotro/marketplace/wiki/Adaugare-adresa)
 * [EN] Adds a new pick-up address that will be sent to couriers (https://github.com/celdotro/marketplace/wiki/Add-address)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminAddress;

#0#
#FUNCTION#
function addAddress($address, $courier){
    $object = new AdminAddress();

    try{
        $response = $object->addAddress($address, $courier);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}   

#EXAMPLE#
$address = 'Str. X...';
$courier = 'Courier Name';

addAddress($address, $courier);