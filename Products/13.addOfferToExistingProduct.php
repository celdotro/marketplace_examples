<?php
/**
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Products\ProductsInsert;

#0#
#FUNCTION#
function addOfferToExistingProduct($products_model, $stoc, $pret){
    $object = new ProductsInsert();

    try{
        $response = $object->addOfferToExistingProduct($products_model, $stoc, $pret);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$products_model = 'Model';
$stoc = 1;
$pret = 100;
addOfferToExistingProduct($products_model, $stoc, $pret);