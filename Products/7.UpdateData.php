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
        'model' => 'Model1', // obligatoriu / mandatory 
        'pretf' => 120, // numai daca pretlei nu este specificat / only if pretlei is not specified
        //'pretlei' => 120, // numai daca pretf nu este specificat / only if pretf is not specified
        'moneda' => 1,
        'status' => 0,
        'pretspecial' => 1,
        'adaos' => 1,
        'bonus' => 1,
        'stoc' => 2,
        'pret_vechi' => 100,
        // (pretspecial, start, end) formeaza un tuplu, asadar existenta unui camp va genera obligativitatea celorlalte / (pretspecial, start, end) form a tuple, therefore if a field exists, the others become mandatory
        'pretspecial' => 101,
        'start' => '2017-01-01',
        'end' => '2017-08-01',
        'hasTVA' => false
    )
);
updateData($products);