<?php
/**
 * [RO] Preia intrebarile despre o comanda (https://github.com/celdotro/marketplace/wiki/Preia-intrebari-comanda)
 * [EN] Get order's questions (https://github.com/celdotro/marketplace/wiki/Get-order-questions)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Email\EmailCommunication;

#0#
#FUNCTION#
function getOrderContact($orders_id){
    $object = new EmailCommunication();

    try{
        $response = $object->getOrderContact($orders_id);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$orders_id = 2000610;
getOrderContact($orders_id);