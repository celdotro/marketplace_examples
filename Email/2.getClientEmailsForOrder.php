<?php
/**
 * [RO] Returneaza un graf cu conversatiile purtate prin intermediul email-ului cu clientii (hthttps://github.com/celdotro/marketplace/wiki/Trimitere-raport-bug)
 * [EN] Returns a graph with the conversations made through the email with the client (https://github.com/celdotro/marketplace/wiki/Send-bug-report)
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
$cmd = 113606;
getClientEmailsForOrder($cmd);