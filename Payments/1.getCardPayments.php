<?php
/**
 * [RO] Preia informatii aferente platilor lunare cu cardul
 * [EN] Retrieve information about monthly card payments
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Payments\PaymentsReports;

#25#
#FUNCTION#
function getCardPayments($month){
    $object = new PaymentsReports();

    try{
        $response = $object->getCardPayments($month);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$month = '07/2018';
getCardPayments($month);