<?php
/**
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminInformation;

#FUNCTION#
function subscribeToApiNewsletter(){
    $object = new AdminInformation();

    try{
        $response = $object->subscribeToApiNewsletter();
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
subscribeToApiNewsletter();