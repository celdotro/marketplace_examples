<?php
/**
 * [RO] Preia date referitoare la accesul la categorii (https://github.com/celdotro/marketplace/wiki/Preia-accesul-la--categorii)
 * [EN] Retrieve information about category access (https://github.com/celdotro/marketplace/wiki/Retrieve-category-access)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminInformation;

#FUNCTION#
function getCategoriesAccess(){
    $object = new AdminInformation();

    try{
        $response = $object->getCategoriesAccess();
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
getCategoriesAccess();