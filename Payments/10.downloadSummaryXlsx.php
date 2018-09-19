<?php
/**
 * [RO] Descarca borderoul in format XLSX (https://github.com/celdotro/marketplace/wiki/Descarca-borderou-XLSX)
 * [EN] Download XLSX format summary (https://github.com/celdotro/marketplace/wiki/Download-summary-XLSX)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Payments\PaymentsReports;

#25#
#FUNCTION#
function downloadSummaryXlsx($borderou){
    $object = new PaymentsReports();

    try{
        $response = $object->downloadSummaryXlsx($borderou);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$borderou = 1;
downloadSummaryXlsx($borderou);