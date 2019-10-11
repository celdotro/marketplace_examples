<?php
/**
 * [RO] Preia lista produselor aflate in asteptare (https://github.com/celdotro/marketplace/wiki/Preia-produse-in-asteptare)
 * [EN] Get waiting products list (https://github.com/celdotro/marketplace/wiki/Get-waiting-products)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Products\ProductsList;


#FUNCTION#
function getWaitingProducts($start){
    $object = new ProductsList();

    try{
        $response = $object->getWaitingProducts($start);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$start = 0;
getWaitingProducts($start);