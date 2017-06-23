<?php
/**
 * [RO] Listeaza bonusurile unui produs (https://github.com/celdotro/marketplace/wiki/Listeaza-bonus)
 * [EN] Gets a products' bonuses (https://github.com/celdotro/marketplace/wiki/List-bonus)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';

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