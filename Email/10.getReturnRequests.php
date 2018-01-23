<?php
/**
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Email\EmailCommunication;

#FUNCTION#
function getReturnRequests($minDate = null, $maxDate = null, $product_model = null, $start = null){
    $object = new EmailCommunication();

    try{
        $response = $object->getReturnRequests($minDate, $maxDate, $product_model, $start);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$minDate = '2010-01-01';
$maxDate = '2018-12-31';
$product_model = null;
$start = 0;
getReturnRequests($minDate, $maxDate, $product_model, $start);