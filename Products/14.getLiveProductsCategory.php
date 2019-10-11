<?php
/**
 * [RO] Preia produsele live pe categorii (https://github.com/celdotro/marketplace/wiki/Preia-produsele-live-pe-categorii)
 * [EN] Get live products for each category (https://github.com/celdotro/marketplace/wiki/Get-live-products-categories)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Products\ProductsList;

#0#
#FUNCTION#
function getLiveProductsCategory(){
    $object = new ProductsList();

    try{
        $response = $object->getLiveProductsCategory();
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
getLiveProductsCategory();