<?php
include __DIR__ . '/../api_include.php';

use celmarket\Products\ProductsBonus;

#13#
#FUNCTION#
function setBonus($model, $bonus){
    $object = new ProductsBonus();

    try{
        $response = $object->setBonus($model, $bonus);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
setBonus(
    9,
    array(8,9,10)
);