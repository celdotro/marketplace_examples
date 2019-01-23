<?php
/**
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminInformation;

#FUNCTION#
function submitSmartBillData($usesSmartBill, $username, $password, $series){
    $object = new AdminInformation();

    try{
        $response = $object->submitSmartBillData($usesSmartBill, $username, $password, $series);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$usesSmartBill = 1;
$username = 'abc';
$password = 'bc'; 
$series = 'cd';
submitSmartBillData($usesSmartBill, $username, $password, $series);