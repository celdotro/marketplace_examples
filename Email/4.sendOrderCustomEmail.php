<?php
/**
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';

use celmarket\Auth;
Auth::setUserDetails('USERNAME', 'PASSWORD');

use celmarket\Email\EmailOrder;

function sendOrderCustomEmail($cmd, $subject, $body, $replyID = null){
    $object = new EmailOrder();

    try{
        $response = $object->sendOrderCustomEmail($cmd, $subject, $body, $replyID);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$cmd = 123456;
$subject = 'Subiect Email';
$body = 'Continutul email-ului';
$replyID = '<ID-ul mesajului la care se raspunde>';
sendOrderCustomEmail($cmd, $subject, $body, $replyID);