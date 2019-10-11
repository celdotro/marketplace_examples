<?php
/**
 * [RO] Returneaza lista de categorii disponibile. Prima categorie va avea implicit numele "parent". (https://github.com/celdotro/marketplace/wiki/Listeaza-categorii)
 * [EN] Returns the list of available categories. The first category will be named 'parent' by default. (https://github.com/celdotro/marketplace/wiki/List-categories)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




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