<?php
/**
 * [RO] Adauga noi valori in lista unei caracteristici (https://github.com/celdotro/marketplace/wiki/Adauga-noi-valori-unei-caracteristici)
 * [EN] Add new values to a characteristic's list (https://github.com/celdotro/marketplace/wiki/Add-new-values-to-a-characteristic)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';

use celmarket\Auth;
Auth::setUserDetails('USERNAME', 'PASSWORD');

use celmarket\Products\ProductsInsert;

#0#
#FUNCTION#
function addValuesToCharacteristic($categID, $charactID, $charactValues){
    $object = new ProductsInsert();

    try{
        $response = $object->addValuesToCharacteristic($categID, $charactID, $charactValues);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$categID = 1;
$charactID = 100;
$charactValues = array('val1', 'val2');
addValuesToCharacteristic($categID, $charactID, $charactValues);