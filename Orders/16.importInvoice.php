<?php
/**
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Orders\OrdersUpdate;


#FUNCTION#
function importInvoice($cmd, $serie, $nr_fact){
    $object = new OrdersUpdate();

    try{
        $response = $object->importInvoice($cmd, $serie, $nr_fact);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
importInvoice(100, 'A', 1);