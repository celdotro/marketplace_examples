<?php
/**
 * [RO] Descarca borderoul in format PDF (https://github.com/celdotro/marketplace/wiki/Descarca-borderou-PDF)
 * [EN] Download PDF format summary (https://github.com/celdotro/marketplace/wiki/Download-summary-PDF)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Payments\PaymentsReports;

#25#
#FUNCTION#
function downloadSummaryPDF($borderou){
    $object = new PaymentsReports();

    try{
        $response = $object->downloadSummaryPDF($borderou);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$borderou = 1;
downloadSummaryPDF($borderou);