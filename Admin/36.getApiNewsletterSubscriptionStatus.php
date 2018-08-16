<?php
/**
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