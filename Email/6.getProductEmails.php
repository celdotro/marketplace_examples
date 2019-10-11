<?php
/**
 * [RO] Preia email-urile fara raspuns despre produse (https://github.com/celdotro/marketplace/wiki/Preia-email-urile-despre-produse)
 * [EN] Retrieve all unanswered emails about products (https://github.com/celdotro/marketplace/wiki/Retrieve-products-emails)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Email\EmailCommunication;

#0#
#FUNCTION#
function getProductEmails($product_model){
    $object = new EmailCommunication();

    try{
        $response = $object->getProductEmails($product_model);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$product_model = 'Model1';
getProductEmails($product_model);