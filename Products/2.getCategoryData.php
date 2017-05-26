<?php
/**
 * [RO] Returneaza datele pentru o anumita categorie. Datele pot fi in format extins (0) sau scurt (1)
 * [EN] Returns all the data of the specified category. Data format can be extended (0) or short (1)
 */
include __DIR__ . '/../api_include.php';

use celmarket\Products\ProductsData;

#12#
#FUNCTION#
function getCategoryData($modelType, $categoryID = null){
    $object = new ProductsData();

    try{
        $response = $object->getCategoryData($modelType, $categoryID);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
getCategoryData(0, 91);