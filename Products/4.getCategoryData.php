<?php
include __DIR__ . '/../api_include.php';

use celmarket\Products\ProductsData;

#12#
#FUNCTION#
function getCategoryData($modelType, $categoryID = null){
    $object = new ProductsData();

    try{
        $response = $object->getCategoryData($modelType, $categoryID);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
getCategoryData(0, 91);