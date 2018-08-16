<?php
/**
 * [RO] Abonare la newsletter-ul despre API (https://github.com/celdotro/marketplace/wiki/Abonare-la-newsletter-API)
 * [EN] Subscribe to API newsletter (https://github.com/celdotro/marketplace/wiki/Subscribe-to-API-newsletter)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminInformation;

#FUNCTION#
function subscribeToApiNewsletter(){
    $object = new AdminInformation();

    try{
        $response = $object->subscribeToApiNewsletter();
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
subscribeToApiNewsletter();