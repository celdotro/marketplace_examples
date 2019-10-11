<?php
/**
 * [RO] Preia mesajele comenzilor (https://github.com/celdotro/marketplace/wiki/Preia-mesajele-comenzilor)
 * [EN] Retrieves orders messages (https://github.com/celdotro/marketplace/wiki/Get-orders-messages)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Email\EmailOrder;


#FUNCTION#
function getOrdersContacts($minDate = null, $maxDate = null, $email = null, $name = null, $site = null, $raspuns = null){
    $object = new EmailOrder();

    try{
        $response = $object->getOrdersContacts($minDate, $maxDate, $email, $name, $site, $raspuns);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$minDate = null;
$maxDate = null;
$email = null;
$name = null;
$site = null;
$raspuns = null;
getOrdersContacts($minDate, $maxDate, $email, $name, $site, $raspuns);