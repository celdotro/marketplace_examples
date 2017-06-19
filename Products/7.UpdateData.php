<?php
/**
 * [RO] Actualizeaza datele unui produs (https://github.com/celdotro/marketplace/wiki/Actualizeaza-date-produs)
 * [EN] Update a product's data (https://github.com/celdotro/marketplace/wiki/Update-product-data)
 */
include __DIR__ . '/../api_include.php';

use celmarket\Auth;
Auth::setUserDetails('USERNAME', 'PASSWORD');

use celmarket\Products\ProductsUpdate;

#16#
#FUNCTION#
function updateData($products){
    $object = new ProductsUpdate();

    try{
        $response = $object->updateData($products);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$products = array(
    array(
        'model' => 'Model1',
        'pretf' => 120,
        'pretlei' => 120,
        'moneda' => 1,
        'status' => 0,
        'pretspecial' => 1
    )
);
updateData($products);