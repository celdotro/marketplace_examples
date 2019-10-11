<?php
/**
 * [RO] Preia lunile in care s-au generat borderouri (https://github.com/celdotro/marketplace/wiki/Preia-lunile-borderourilor)
 * [EN] Get months in which orders summary was generated (https://github.com/celdotro/marketplace/wiki/Get-summary-months)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Payments\PaymentsReports;

#25#
#FUNCTION#
function getSummaryMonths(){
    $object = new PaymentsReports();

    try{
        $response = $object->getSummaryMonths();
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
getSummaryMonths();