<?php
/**
 * [RO] Returneaza lista de categorii disponibile
 * [EN] Returns the list of available categories
 */
include __DIR__ . '/../api_include.php';

use celmarket\Auth;
Auth::setUserDetails('USERNAME', 'PASSWORD');

use celmarket\Products\ProductsList;

#11#
#FUNCTION#
function getCategories(){
    $object = new ProductsList();

    try{
        $response = $object->getCategories();
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
getCategories();