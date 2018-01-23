<?php
/**
 * [RO] Preia cererile de service aferente afiliatului (https://github.com/celdotro/marketplace/wiki/Preia-cererile-de-service)
 * [EN] Get service requests for the current affilaite (https://github.com/celdotro/marketplace/wiki/Get-service-requests)
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