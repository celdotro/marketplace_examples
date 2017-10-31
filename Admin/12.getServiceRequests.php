<?php
/**
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminReports;

#FUNCTION#
function getServiceRequests($type, $page = 1){
    $object = new AdminReports();

    try{
        $response = $object->getServiceRequests($type, $page);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$type = 0;
$page = 1;
getServiceRequests($type, $page);