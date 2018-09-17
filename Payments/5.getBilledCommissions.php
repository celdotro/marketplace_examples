<?php
/**
 * [RO] Preia comisioanele facturate (https://github.com/celdotro/marketplace/wiki/Preia-comisioane-facturate)
 * [EN] Retrieve billed commissions (https://github.com/celdotro/marketplace/wiki/Retrieve-billed-commissions)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Payments\PaymentsReports;

#25#
#FUNCTION#
function getBilledCommissions($month){
    $object = new PaymentsReports();

    try{
        $response = $object->getBilledCommissions($month);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$month = '11/2017';
getBilledCommissions($month);