<?php
/**
 * [RO] Descarca factura
 * [EN] Download invoice
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Payments\PaymentsReports;

#25#
#FUNCTION#
function downloadInvoice($borderou){
    $object = new PaymentsReports();

    try{
        $response = $object->downloadInvoice($borderou);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$borderou = 1;
downloadInvoice($borderou);