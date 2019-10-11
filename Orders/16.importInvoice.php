<?php
/**
 * [RO] Permite importul unei facturi (https://github.com/celdotro/marketplace/wiki/Import-factura)
 * [EN] Imports a new invoice (https://github.com/celdotro/marketplace/wiki/Import-Invoice)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Orders\OrdersUpdate;

#4#
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
importInvoice(123456, 'Serie', 1);