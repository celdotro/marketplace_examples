<?php
include __DIR__ . '/../api_include.php';

use celmarket\Orders\OrdersSummary;

#4#
#FUNCTION#
function getOrdersSummary($numDays){
    $object = new OrdersSummary();

    try{
        $response = $object->getSummary($numDays);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
getOrdersSummary(3);