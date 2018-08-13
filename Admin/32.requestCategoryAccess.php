<?php
/**
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
$categ_id = 788;
// $categ_id = 45;
requestCategoryAccess($categ_id);