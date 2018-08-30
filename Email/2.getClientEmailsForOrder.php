<?php
/**
 * [RO] Returneaza un graf cu conversatiile purtate prin intermediul email-ului cu clientii (https://github.com/celdotro/marketplace/wiki/Preia-email-urile-unui-client-pentru-o-comanda)
 * [EN] Returns a graph with the conversations made through the email with the client (https://github.com/celdotro/marketplace/wiki/Get-client-emails-for-an-order)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




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