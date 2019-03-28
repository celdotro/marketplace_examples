<?php
/**
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Products\ProductsUpdate;


#FUNCTION#
function massUpdateStatus(){
    $object = new ProductsUpdate();

    try{
        $response = $object->massUpdateStatus();
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
massUpdateStatus();