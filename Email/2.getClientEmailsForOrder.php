<?php
/**
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';

use celmarket\Auth;
Auth::setUserDetails('USERNAME', 'PASSWORD');

use celmarket\Email\EmailOrder;

function getClientEmailsForOrder($cmd){
    $object = new EmailOrder();

    try{
        $response = $object->getClientEmailsForOrder($cmd);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$cmd = 123456;
getClientEmailsForOrder($cmd);