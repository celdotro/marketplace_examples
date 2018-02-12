<?php
/**
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Products\ProductsUpdate;

#16#
#FUNCTION#
function updateStatus($model, $status){
    $object = new ProductsUpdate();

    try{
        $response = $object->updateStatus($model, $status);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$model = 'Model 1';
$status = 1;
updateStatus($model, $status);