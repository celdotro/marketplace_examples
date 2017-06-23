<?php
/**
 * [RO] Sterge bonusurile produselor (https://github.com/celdotro/marketplace/wiki/Stergere-bonus)
 * [EN] Deletes products' bonuses (https://github.com/celdotro/marketplace/wiki/Delete-bonus)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';

use celmarket\Auth;
Auth::setUserDetails('USERNAME', 'PASSWORD');

use celmarket\Products\ProductsBonus;

#16#
#FUNCTION#
function deleteBonus($model, $bonuses){
    $object = new ProductsBonus();

    try{
        $response = $object->deleteBonus($model, $bonuses);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$model = 'Model1';
$bonuses = array('ModelBonus1', 'ModelBonus2');
deleteBonus($model, $bonuses);