<?php
/**
 * [RO] Actualizeaza datele unui produs (https://github.com/celdotro/marketplace/wiki/Actualizeaza-date-produs)
 * [EN] Update a product's data (https://github.com/celdotro/marketplace/wiki/Update-product-data)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




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
        'model' => 'testupdatedata', // obligatoriu / mandatory 
        // 'pretf' => 100, // numai daca pretlei nu este specificat / only if pretlei is not specified
        'pretlei' => 100, // numai daca pretf nu este specificat / only if pretf is not specified
        'moneda' => 'RON',
        // 'status' => 0,
        // 'adaos' => 1,
        // 'bonus' => 1,
        'stoc' => 20,
        // 'pret_vechi' => 100,
        // (pret_promo, start, end) formeaza un tuplu, asadar, daca un camp exista, restul, care nu sunt stocate inca in baza de date, sunt obligatorii / (pret_promo, start, end) form a tuple, therefore if a field is specified, the rest, that aren't yet stored in the database, are mandatory
        // 'pret_promo' => 101,
        // 'start' => '2017-01-01',
        // 'end' => '2017-08-01',
        'hasTVA' => 1,
        // 'garantie' => 2,
        // 'garantie_pj' => 12,
        // 'data_minima' => '2018-07-04'
    )
);
updateData($products);