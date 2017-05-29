<?php
/**
 * [RO] Insereaza sau actualizeaza un produs. Poate primi o forma detaliata sau una scurta, cu toate acestea, pentru adaugarea unui produs nou poate fi folosita numai forma detaliata.
 * [EN] Inserts or updates a product. Can receive a detailed list of data or a short list, but for inserting a new product the detailed list is necessary.
 */
include __DIR__ . '/../api_include.php';

use celmarket\Auth;
Auth::setUserDetails('USERNAME', 'PASSWORD');

use celmarket\Products\ProductsInsert;

#16#
#FUNCTION#
function importProducts($products){
    $object = new ProductsInsert();

    try{
        $response = $object->importProducts($products);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$arrProducts = array(
    
    // Primul produs din lista -> forma detaliata
    // First product -> detailed form
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
        'products_description' => 'DESC1'
    ),

    // Al doilea produs din lista -> forma scurta
    // Second product -> short form
     array(
        'pretf' => 203,
        'products_model' => 'Model1',
        'stoc' => 38
    )

    // [... N]      
);
importProducts($arrProducts);