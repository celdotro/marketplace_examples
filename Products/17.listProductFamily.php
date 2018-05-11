<?php
/**
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Products\ProductsList;

#16#
#FUNCTION#
function getProductFamily($model){
    $object = new ProductsList();

    try{
        $response = $object->getProductFamily($model);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$model = 'codstockzero3';
getProductFamily($model);