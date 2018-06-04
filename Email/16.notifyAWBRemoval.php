<?php
/**
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Email\EmailOrder;

#FUNCTION#
function notifyAWBRemoval($orders_id, $reason){
    $object = new EmailOrder();

    try{
        $response = $object->notifyAWBRemoval($orders_id, $reason);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$orders_id = 113636;
$reason = 'Motiv';
notifyAWBRemoval($orders_id, $reason);