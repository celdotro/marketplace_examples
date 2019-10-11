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
$dateMin = '2018-01-10';
$dateMax = '2018-03-20';
cardPayments($dateMin, $dateMax);