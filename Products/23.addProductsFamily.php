<?php
/**
 * [RO] Adauga o familie de produse (https://github.com/celdotro/marketplace/wiki/Adauga-familie-de-produse)
 * [EN] Add a products family (https://github.com/celdotro/marketplace/wiki/Add-products-family)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Products\ProductsUpdate;

#16#
#FUNCTION#
function addProductsFamily($id, $name, $characts){
    $object = new ProductsUpdate();

    try{
        $response = $object->addProductsFamily($id, $name, $characts);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$id = 888;
$name = '888';
$characts = '{"mode":1,"charact":618}';
$categ_id = 124;
addProductsFamily($id, $categ_id, $name, $characts);
