<?php
/**
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminInformation;

#FUNCTION#
function insertTaxForAllCategories($newValue = null, $newLimit = null){
    $object = new AdminInformation();

    try{
        $response = $object->insertTaxForAllCategories($newValue, $newLimit);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$newValue = 150;
$newLimit = 150;
insertTaxForAllCategories($newValue, $newLimit);