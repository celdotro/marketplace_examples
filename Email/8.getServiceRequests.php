<?php
/**
 * [RO] Preia cererile de service aferente afiliatului (https://github.com/celdotro/marketplace/wiki/Preia-cererile-de-retur)
 * [EN] Get service requests for the current affiliate (https://github.com/celdotro/marketplace/wiki/Get-service-requests)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Email\EmailCommunication;

#FUNCTION#
function getServiceRequests($minDate = null, $maxDate = null, $product_model = null, $start = null){
    $object = new EmailCommunication();

    try{
        $response = $object->getServiceRequests($minDate, $maxDate, $product_model, $start);
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
getServiceRequests($minDate, $maxDate, $product_model, $start);