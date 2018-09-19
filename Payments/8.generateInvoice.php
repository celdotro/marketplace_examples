<?php
/**
 * [RO] Genereaza factura (https://github.com/celdotro/marketplace/wiki/Genereaza-factura)
 * [EN] Generate invoice (https://github.com/celdotro/marketplace/wiki/Generate-invoice)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Payments\PaymentsReports;

#25#
#FUNCTION#
function generateInvoice($borderou){
    $object = new PaymentsReports();

    try{
        $response = $object->generateInvoice($borderou);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$borderou = 236;
generateInvoice($borderou);