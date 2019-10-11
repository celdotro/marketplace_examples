<?php
/**
 * [RO] Preia datele produselor dintr-o familie (https://github.com/celdotro/marketplace/wiki/Preia-produse-din-familie)
 * [EN] Get product's data for the products that belong to a family (https://github.com/celdotro/marketplace/wiki/Get-product-from-family)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Products\ProductsList;

#16#
#FUNCTION#
function getProductsForFamily($id){
    $object = new ProductsList();

    try{
        $response = $object->getProductsForFamily($id);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$id = 1;
getProductsForFamily($id);