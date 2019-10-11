<?php
/**
 * [RO] Preia comisioanele nefacturate (https://github.com/celdotro/marketplace/wiki/Preia-comisioanele-nefacturate)
 * [EN] Get unbilled commissions (https://github.com/celdotro/marketplace/wiki/Get-unbilled-commissions)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Payments\PaymentsReports;

#25#
#FUNCTION#
function getUnbilledCommissions(){
    $object = new PaymentsReports();

    try{
        $response = $object->getUnbilledCommissions();
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
getUnbilledCommissions();