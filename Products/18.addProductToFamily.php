<?php
/**
 * [RO] Adauga un produs intr-o familie de produse (https://github.com/celdotro/marketplace/wiki/Adauga-produs-in-familie)
 * [EN] Add a product to a product family (https://github.com/celdotro/marketplace/wiki/Add-product-to-family)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Products\ProductsUpdate;

#16#
#FUNCTION#
function addProductToFamily($familyId, $model){
    $object = new ProductsUpdate();

    try{
        $response = $object->addProductToFamily($familyId, $model);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$familyId = 1;
$model = 'model';
addProductToFamily($familyId, $model);