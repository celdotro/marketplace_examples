<?php
include __DIR__ . '/../api_include.php';

use celmarket\Products\ProductsInsert;

#8#
#FUNCTION#
function importProducts($arrproducts){
    $object = new ProductsInsert();

    try{
        $response = $object->importProducts($arrproducts);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$arrProducts = array(
    
    // 1st product
    array(
        'products_url' => 'http://cel.ro',
        'pretf' => 200,
        'products_image' => 'http://cel.ro',
        'products_model' => 'Model1',
        'garantie' => 1,
        'categories_id' => 1,
        'stoc' => 1,
        'products_name' => 'Nume1',
        'charact' => array(
            4 => 'Dimensiuni mediu printare:',
            20 => 'Interfata:'
        ),
        'products_weight' => 15,
        'products_status' => 1,
        'moneda' => 3,
        'import_code' => 2,
        'products_quantity' => 2,
        'adaos' => 15,
        'products_description' => 'Desc1',
        'bonus' => 10,
        'recomandate' => 2,
        'image' => 'Image1',
        'procesare_in' => 1,
        'cand' => '2017-04-03 09:00:00',
        'pret_vechi' => 100,
        'manufacturers_name' => 'AOC',
    ),

    // [2nd product]
    array(
        'products_url' => 'http://cel.ro',
        'pretf' => 201,
        'products_image' => 'http://cel2.ro',
        'products_model' => 'Model2',
        'garantie' => 1,
        'categories_id' => 1,
        'stoc' => 1,
        'products_name' => 'Nume2',
        'charact' => array(
            4 => 'Dimensiuni mediu printare:',
            20 => 'Interfata:'
        ),
        'products_weight' => 15,
        'products_status' => 1,
        'moneda' => 3,
        'import_code' => 2,
        'products_quantity' => 2,
        'adaos' => 15,
        'products_description' => 'Desc2',
        'bonus' => 10,
        'recomandate' => 2,
        'image' => 'Image1',
        'procesare_in' => 1,
        'cand' => '2017-04-03 09:00:00',
        'pret_vechi' => 100,
        'manufacturers_name' => 'AOC',
    )      

    // [... Nth product]      
);
importProducts($arrProducts);