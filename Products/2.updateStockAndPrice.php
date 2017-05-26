<?php
include __DIR__ . '/../api_include.php';

use celmarket\Products\ProductsUpdate;

#9#
#FUNCTION#
function updateStockAndPrice($arrproducts){
    $object = new ProductsUpdate();

    try{
        $response = $object->updateStockAndPrice($arrproducts);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$arrProducts = array(
    array(
        'pretf' => 202,
        'products_model' => 'Model1',
        'stoc' => 38
    )
);
updateStockAndPrice($arrProducts);