<?php
/**
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminAccount;

#FUNCTION#
function testLogin(){
    $object = new AdminAccount();

    try{
        $response = $object->testLogin();
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
testLogin();