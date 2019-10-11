<?php
/**
 * [RO] Returneaza un sumar al comenzilor pe un numar de zile specificat prin parametru (https://github.com/celdotro/marketplace/wiki/Sumar-comenzi)
 * [EN] Returns the orders summary that encompasses a number of days specified as a parameter (https://github.com/celdotro/marketplace/wiki/Orders-summary)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




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