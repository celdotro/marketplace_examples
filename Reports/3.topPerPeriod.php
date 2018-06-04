<?php
/**
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Reports\AnalyticsReports;

#16#
#FUNCTION#
function topPerPeriod($dateMin = null, $dateMax = null, $num = 10, $categ){
    $object = new AnalyticsReports();

    try{
        $response = $object->topPerPeriod($dateMin, $dateMax, $num, $categ);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$dateMin = '2018-03-01';
$dateMax = '2018-04-30';
$num = 10;
$categ = 91;
topPerPeriod($dateMin, $dateMax, $num, $categ);