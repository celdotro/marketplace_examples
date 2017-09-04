<?php
/**
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';

use celmarket\Auth;
Auth::setUserDetails('USERNAME', 'PASSWORD');

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