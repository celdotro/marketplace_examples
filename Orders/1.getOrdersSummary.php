<?php
/**
 * [RO] Returneaza un sumar al comenzilor pe un numar de zile specificat prin parametru
 * [EN] Returns the orders summary that encompasses a number of days specified as a parameter
 */
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