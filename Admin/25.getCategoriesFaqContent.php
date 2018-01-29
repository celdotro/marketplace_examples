<?php
/**
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminInformation;

#FUNCTION#
function getCategoryFaqContent($category){
    $object = new AdminInformation();

    try{
        $response = $object->getCategoryFaqContent($category);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$category = 100;
getCategoryFaqContent($category);