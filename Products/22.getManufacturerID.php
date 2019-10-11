<?php
/**
 * [RO] Preia ID-ul unui producator (https://github.com/celdotro/marketplace/wiki/Preia-ID-producator)
 * [EN] Retrieve manufacturer's ID (https://github.com/celdotro/marketplace/wiki/Get-manufacturer-ID)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Products\ProductsList;

#16#
#FUNCTION#
function getManufacturerID($name){
    $object = new ProductsList();

    try{
        $response = $object->getManufacturerID($name);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$name = 'nume_producator';
getManufacturerID($name);