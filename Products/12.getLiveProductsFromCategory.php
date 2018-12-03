<?php
/**
 * [RO] Listeaza produsele live dintr-o categorie precizata prin parametru (https://github.com/celdotro/marketplace/wiki/Preluare-produse-live-din-categorie)
 * [EN] List all live products from a category (https://github.com/celdotro/marketplace/wiki/Retrieve-live-products-from-category)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Products\ProductsList;

#0#
#FUNCTION#
function getLiveProductsFromCategory($category, $keyword = null, $start = null, $limit = null){
    $object = new ProductsList();

    try{
        $response = $object->getLiveProductsFromCategory($category, $keyword, $start, $limit);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$category = 91;
$keyword = '';
$start = 0;
$limit = 10;
getLiveProductsFromCategory($category, $keyword, $start, $limit);