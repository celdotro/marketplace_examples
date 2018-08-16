<?php
/**
 * [RO] Preia statusul abonarii la newsletter-ul pentru API (https://github.com/celdotro/marketplace/wiki/Status-abonare-newsletter-API)
 * [EN] Retrieves the subscription status to API newsletter
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminInformation;

#FUNCTION#
function getApiNewsletterSubscriptionStatus(){
    $object = new AdminInformation();

    try{
        $response = $object->getApiNewsletterSubscriptionStatus();
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
getApiNewsletterSubscriptionStatus();