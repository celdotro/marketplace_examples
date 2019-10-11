<?php
/**
 * [RO] Sterge factura unei facturi (https://github.com/celdotro/marketplace/wiki/Stergere-factura)
 * [EN] Deletes an order's invoice (https://github.com/celdotro/marketplace/wiki/Remove-Invoice)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Invoices\InvoicesData;

#32#
#FUNCTION#
function removeInvoice($cmd){
    $object = new InvoicesData();

    try{
        $response = $object->removeInvoice($cmd);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
removeInvoice(123456);