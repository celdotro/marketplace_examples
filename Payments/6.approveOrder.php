<?php
/**
 * [RO] Aproba comanda (https://github.com/celdotro/marketplace/wiki/Aproba-comanda)
 * [EN] Approve order (https://github.com/celdotro/marketplace/wiki/Approve-order)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Payments\PaymentsReports;

#25#
#FUNCTION#
function approveOrder($oid, $borderou){
    $object = new PaymentsReports();

    try{
        $response = $object->approveOrder($oid, $borderou);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$oid = 1;
$borderou = 1;
approveOrder($oid, $borderou);