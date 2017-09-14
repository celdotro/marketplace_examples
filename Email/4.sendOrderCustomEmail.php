<?php
/**
 * [RO] Trimite clientului un email personalizat aferent unei comenzi (https://github.com/celdotro/marketplace/wiki/Trimitere-email-personalizat-aferent-comenzii)
 * [EN] Sends the client a custom email related to an order (https://github.com/celdotro/marketplace/wiki/Send-custom-order-email)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




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