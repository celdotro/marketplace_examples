<?php
/**
 * [RO] Insereaza sau actualizeaza un produs. Poate primi o forma detaliata sau una scurta, cu toate acestea, pentru adaugarea unui produs nou poate fi folosita numai forma detaliata. (https://github.com/celdotro/marketplace/wiki/Import-produse)
 * [EN] Inserts or updates a product. Can receive a detailed list of data or a short list, but for inserting a new product the detailed list is necessary. (https://github.com/celdotro/marketplace/wiki/Import-products)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';

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
    
    // Primul produs din lista -> forma detaliata (orice tip de produs)
    // First product -> detailed form (any type of product)
    array(
        'products_name' => 'Nume1', // Obligatoriu pentru forma detailata / Mandatory for detailed form
        'products_model' => 'Model1', // Obligatoriu pentru forma detailata / Mandatory for detailed form
        'manufacturers_name' => 'ManufacturerCompany', // Obligatoriu pentru forma detailata / Mandatory for detailed form
        'moneda' => 'RON', // Obligatoriu pentru forma detailata / Mandatory for detailed form
        'products_description' => 'Desc1', // Obligatoriu pentru forma detailata / Mandatory for detailed form
        'garantie' => 1, // Obligatoriu pentru forma detailata / Mandatory for detailed form
        'categories_id' => 48, // Obligatoriu pentru forma detailata / Mandatory for detailed form
        'stoc' => 1, // Obligatoriu pentru forma detailata / Mandatory for detailed form
        'pretf' => 200, // Obligatoriu pentru forma detailata / Mandatory for detailed form
        
        'products_url' => 'http://cel.ro',
        'products_image' => 'http://cel.ro',
        'charact' => array(
            4 => 'Dimensiuni mediu printare:',
            20 => 'Interfata:'
        ),
        'products_weight' => 15,
        'products_status' => 1,
        'import_code' => 2,
        'products_quantity' => 2,
        'adaos' => 15,
        'bonus' => array(
            'BonusModel1',
            'BonusModel2'
        ),
        'recomandate' => 2,
        'image' => 'Image1',
        'procesare_in' => 1,
        'cand' => '2017-04-03 09:00:00',
        'pret_vechi' => 100,
        'status' => 1
    ),

    // Al doilea produs din lista -> forma scurta (produse deja aprobate)
    // Second product -> short form (already approved products)
     array(
        'products_model' => 'Model2', // Obligatoriu pentru forma scurta / Mandatory for short form
        'pretf' => 203, // Trebuie cel putin 1 camp dintre 'pretf' si 'stoc' / At least one field between 'pretf' and 'stoc' is necessary
        'stoc' => 38 // Trebuie cel putin 1 camp dintre 'pretf' si 'stoc' / At least one field between 'pretf' and 'stoc' is necessary
    )

    // [... N]      
);
importProducts($arrProducts);