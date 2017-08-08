<?php
/**
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';

use celmarket\Auth;
Auth::setUserDetails('USERNAME', 'PASSWORD');

use celmarket\Email\EmailOrder;

function sendOrderEmail($cmd, $idEmail){
    $object = new EmailOrder();

    try{
        $response = $object->sendOrderEmail($cmd, $idEmail);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$cmd = 123456;
$idEmail = 1;
sendOrderEmail($cmd, $idEmail);