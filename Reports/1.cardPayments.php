<?php
/**
 * [RO] Preia datele agregate lunar ale platilor cu cardul (https://github.com/celdotro/marketplace/wiki/Plati-cu-cardul)
 * [EN] Retrieves aggregate monthly reports of card payments (https://github.com/celdotro/marketplace/wiki/Card-payments)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Reports\FinancialReports;

#16#
#FUNCTION#
function cardPayments($dateMin = null, $dateMax = null){
    $object = new FinancialReports();

    try{
        $response = $object->cardPayments($dateMin, $dateMax);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$dateMin = '2018-01-02';
$dateMax = '2018-08-25';
cardPayments($dateMin, $dateMax);