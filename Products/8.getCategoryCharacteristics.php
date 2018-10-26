<?php
/**
 * [RO] Listeaza caracteristicile unei categorii (https://github.com/celdotro/marketplace/wiki/Listeaza-caracteristicile-unei-categorii)
 * [EN] Lists the characteristics of a category (https://github.com/celdotro/marketplace/wiki/List-characteristics-of-a-category)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Products\ProductsList;

#0#
#FUNCTION#
function getCategoryCharacteristics($categID){
    $object = new ProductsList();

    try{
        $response = $object->getCategoryCharacteristics($categID);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$categID = 38;
getCategoryCharacteristics($categID);