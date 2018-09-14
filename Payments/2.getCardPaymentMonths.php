<?php
/**
 * [RO] Preia lunile aferente platilor cu cardul (https://github.com/celdotro/marketplace/wiki/Preia-lunile-platilor-cu-cardul)
 * [EN] Retrieve card payment months (https://github.com/celdotro/marketplace/wiki/Retrieve-card-payments-months)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Payments\PaymentsReports;

#25#
#FUNCTION#
function getCardPaymentMonths(){
    $object = new PaymentsReports();

    try{
        $response = $object->getCardPaymentMonths();
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
getCardPaymentMonths();