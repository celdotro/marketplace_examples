<?php
/**
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Products\ProductsList;

#16#
#FUNCTION#
function getProductsForFamily($id){
    $object = new ProductsList();

    try{
        $response = $object->getProductsForFamily($id);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$id = 1;
getProductsForFamily($id);