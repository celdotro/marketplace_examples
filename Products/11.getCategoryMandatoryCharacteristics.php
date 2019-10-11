<?php
/**
 * [RO] Listeaza caracteristicile obligatorii ale unei categorii (https://github.com/celdotro/marketplace/wiki/Listeaza-caracteristicile-obligatorii-ale-unei-categorii)
 * [EN] Lists the mandatory characteristics of a category (https://github.com/celdotro/marketplace/wiki/List-mandatory-charactersitics-for-a-category)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Products\ProductsList;

#0#
#FUNCTION#
function listCategoryMandatoryCharacteristics($categID){
    $object = new ProductsList();

    try{
        $response = $object->listCategoryMandatoryCharacteristics($categID);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$categID = 1;
listCategoryMandatoryCharacteristics($categID);