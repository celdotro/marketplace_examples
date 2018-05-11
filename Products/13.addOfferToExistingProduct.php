<?php
/**
 * [RO] Adauga o noua oferta unui produs existent (https://github.com/celdotro/marketplace/wiki/Adauga-o-noua-oferta-unui-produs-existent)
 * [EN] Add another offer to an existing product (https://github.com/celdotro/marketplace/wiki/Add-offer-to-existing-product)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Products\ProductsInsert;

#0#
#FUNCTION#
function addOfferToExistingProduct($products_model, $stoc, $pret, $overridePrice){
    $object = new ProductsInsert();

    try{
        $response = $object->addOfferToExistingProduct($products_model, $stoc, $pret, $overridePrice);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$products_model = base64_encode('adaugaofertabug');
$stoc = 1;
$pret = 100;
$overridePrice = 1;
addOfferToExistingProduct($products_model, $stoc, $pret, $overridePrice);