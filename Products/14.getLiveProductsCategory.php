<?php
/**
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Products\ProductsList;

#0#
#FUNCTION#
function getLiveProductsCategory(){
    $object = new ProductsList();

    try{
        $response = $object->getLiveProductsCategory();
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
getLiveProductsCategory();