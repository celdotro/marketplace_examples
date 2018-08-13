<?php
/**
 * [RO] Cere acces la o categorie (https://github.com/celdotro/marketplace/wiki/Cere-acces-la-o-categorie)
 * [EN] Request access to category (https://github.com/celdotro/marketplace/wiki/Request-category-access)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminInformation;

#FUNCTION#
function requestCategoryAccess($categ_id){
    $object = new AdminInformation();

    try{
        $response = $object->requestCategoryAccess($categ_id);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$categ_id = 1;
requestCategoryAccess($categ_id);