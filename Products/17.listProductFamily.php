<?php
/**
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Products\ProductsList;

#16#
#FUNCTION#
function getProductsFamilies($start, $limit, $search){
    $object = new ProductsList();

    try{
        $response = $object->getProductsFamilies($start, $limit, $search);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$start = 0;
$limit = 10;
// $search = '10000051';
// $search = 'probook';
$search = '';

getProductsFamilies($start, $limit, $search);