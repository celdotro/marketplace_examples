<?php
/**
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminAddress;

#FUNCTION#
function addCourier($name){
    $object = new AdminAddress();

    try{
        $response = $object->addCourier($name);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$name = 'test';
addCourier($name);