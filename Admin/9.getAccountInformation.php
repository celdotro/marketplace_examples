<?php
/**
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';

use celmarket\Auth;
Auth::setUserDetails('USERNAME', 'PASSWORD');

use celmarket\Admin\AdminAccount;

#0#
#FUNCTION#
function getAccountInformation(){
    $object = new AdminAccount();

    try{
        $response = $object->getAccountInformation();
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
getAccountInformation();