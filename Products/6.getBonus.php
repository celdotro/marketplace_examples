<?php
include __DIR__ . '/../api_include.php';

use celmarket\Products\ProductsBonus;

#14#
#FUNCTION#
function getBonus($model){
    $object = new ProductsBonus();

    try{
        $response = $object->getBonus($model);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
getBonus(9);