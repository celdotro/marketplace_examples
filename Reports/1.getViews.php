<?php
/**
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Reports\AnalyticsReports;

#16#
#FUNCTION#
function getViews($dateMin = null, $dateMax = null, $location = null){
    $object = new AnalyticsReports();

    try{
        $response = $object->getViews($dateMin, $dateMax, $location);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$dateMin = '2018-03-01';
$dateMax = '2018-04-30';
$location = null;
$start = 0;
$limit = 50;
getViews($dateMin, $dateMax, $location);