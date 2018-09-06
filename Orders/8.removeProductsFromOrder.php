<?php
/**
 * [RO] Sterge un produs dintr-o comanda existenta (https://github.com/celdotro/marketplace/wiki/Stergerea-unui-model-de-produs-din-comanda)
 * [EN] Remove a product model from an existing order (https://github.com/celdotro/marketplace/wiki/Remove-product-model-from-order)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Orders\OrdersUpdate;

function removeProductsFromOrder($cmd, $arrProducts){
    $object = new OrdersUpdate();

    try{
        $response = $object->removeProductsFromOrder($cmd, $arrProducts);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$cmd = 113538;
// $arrProducts = array('memore 160/200/25');
$arrProducts = array('taxa_transport');
removeProductsFromOrder($cmd, $arrProducts);