<?php
/**
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminInformation;

#FUNCTION#
function updateTransportTax($id, $newValue = null, $newLimit = null){
    $object = new AdminInformation();

    try{
        $response = $object->updateTransportTax($id, $newValue, $newLimit);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$id = 91;
$newValue = 150;
$newLimit = 15;
updateTransportTax($id, $newValue, $newLimit);