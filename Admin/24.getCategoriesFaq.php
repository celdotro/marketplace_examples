<?php
/**
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminInformation;

#FUNCTION#
function getCategoriesFaq(){
    $object = new AdminInformation();

    try{
        $response = $object->getCategoriesFaq();
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
getCategoriesFaq();