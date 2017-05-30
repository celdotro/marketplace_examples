<?php
/**
 * [RO] Preia bonusurile unui produs
 * [EN] Gets a products' bonuses
 */
include __DIR__ . '/../api_include.php';

use celmarket\Auth;
Auth::setUserDetails('USERNAME', 'PASSWORD');

use celmarket\Products\ProductsBonus;

#16#
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
$model = 'Model1';
getBonus($model);