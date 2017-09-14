<?php
/**
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Products\ProductsList;

#0#
#FUNCTION#
function getLiveProductsFromCategory($category, $start = null, $limit = null){
    $object = new ProductsList();

    try{
        $response = $object->getLiveProductsFromCategory($category, $start, $limit);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$category = 1;
$start = 0;
$limit = 10;
getLiveProductsFromCategory($category, $start, $limit);