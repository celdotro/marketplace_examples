<?php
/**
 * [RO] Preia lista produselor respinse (https://github.com/celdotro/marketplace/wiki/Preia-produsele-respinse)
 * [EN] Get rejected products list (https://github.com/celdotro/marketplace/wiki/Get-rejected-products)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Products\ProductsList;


#FUNCTION#
function getRejectedProducts($start){
    $object = new ProductsList();

    try{
        $response = $object->getRejectedProducts($start);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$start = 0;
getRejectedProducts($start);