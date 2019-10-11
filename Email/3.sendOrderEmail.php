<?php
/**
 * [RO] Trimite clientului un email predefinit aferent unei comenzi (https://github.com/celdotro/marketplace/wiki/Trimitere-email-aferent-comenzii)
 * [EN] Sends the client a predefined email related to an order (https://github.com/celdotro/marketplace/wiki/Send-predefined-order-email)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




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