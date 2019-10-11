<?php
/**
 * [RO] Respinge comanda (https://github.com/celdotro/marketplace/wiki/Respinge-comanda)
 * [EN] Reject order (https://github.com/celdotro/marketplace/wiki/Reject-order)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Payments\PaymentsReports;

#25#
#FUNCTION#
function approveOrder($oid, $borderou, $reason){
    $object = new PaymentsReports();

    try{
        $response = $object->approveOrder($oid, $borderou, $reason);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$oid = 1;
$borderou = 1;
$reason = 'Motiv';
approveOrder($oid, $borderou, $reason);