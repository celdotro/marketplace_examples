<?php
/**
 * [RO] Preia numarul de mesaje fara raspuns (https://github.com/celdotro/marketplace/wiki/Preia-numarul-de-mesaje-fara-raspuns-ale-comenzilor)
 * [EN] Get unanswered orders messages (https://github.com/celdotro/marketplace/wiki/Get-unanswered-orders-message-number)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Email\EmailOrder;


#FUNCTION#
function getUnansweredOrderContact(){
    $object = new EmailOrder();

    try{
        $response = $object->getUnansweredOrderContact();
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
getUnansweredOrderContact();