<?php
/**
 * [RO] Dezabonare de la newsletter-ul despre API (https://github.com/celdotro/marketplace/wiki/Dezabonare-de-la-newsletter-API)
 * [EN] Unsubscribe from newsletter about API (https://github.com/celdotro/marketplace/wiki/Unsubscribe-from-API-newsletter)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminInformation;

#FUNCTION#
function removeSubscriptionToApiNewsletter(){
    $object = new AdminInformation();

    try{
        $response = $object->removeSubscriptionToApiNewsletter();
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
removeSubscriptionToApiNewsletter();