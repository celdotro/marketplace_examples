<?php
/**
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Products\ProductsUpdate;

#16#
#FUNCTION#
function removeProductFromFamily($model){
    $object = new ProductsUpdate();

    try{
        $response = $object->removeProductFromFamily($model);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
// $familyId = 1;
$model = 'testdoiphpunit';
removeProductFromFamily($model);