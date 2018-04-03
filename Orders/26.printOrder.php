<?php
/**
 * [RO] Returneaza un document PDF cu datele comenzii (https://github.com/celdotro/marketplace/wiki/Tipareste-comanda)
 * [EN] Returns a PDF with the order's details (https://github.com/celdotro/marketplace/wiki/Print-order)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Orders\OrdersData;

#25#
#FUNCTION#
function printOrder($orders_id){
    $object = new OrdersData();

    try{
        $response = $object->printOrder($orders_id);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
#EXAMPLE#
printOrder(123456);