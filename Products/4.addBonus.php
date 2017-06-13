<?php
/**
 * [RO] Adauga bonusuri pentru produsele deja aprobate (https://github.com/celdotro/marketplace/wiki/Adauga-bonus)
 * [EN] Adds bonuses for the products that have been approved (https://github.com/celdotro/marketplace/wiki/Add-bonus)
 */
include __DIR__ . '/../api_include.php';

use celmarket\Auth;
Auth::setUserDetails('USERNAME', 'PASSWORD');

use celmarket\Products\ProductsBonus;

#16#
#FUNCTION#
function addBonus($model, $bonuses){
    $object = new ProductsBonus();

    try{
        $response = $object->addBonus($model, $bonuses);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$model = 'Model1';
$bonuses = array('ModelBonus1', 'ModelBonus2');
addBonus($model, $bonuses);