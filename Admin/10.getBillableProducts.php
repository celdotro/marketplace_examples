<?php
/**
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminReports;

#0#
#FUNCTION#
function getBillableProducts(){
    $object = new AdminReports();

    try{
        $response = $object->getBillableProducts();
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
getBillableProducts();