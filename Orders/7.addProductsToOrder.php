<?php
/**
 * [RO] Adauga noi produse intr-o comanda existenta (https://github.com/celdotro/marketplace/wiki/Adaugarea-de-noi-produse-in-comanda)
 * [EN] Add new products to an existing order (https://github.com/celdotro/marketplace/wiki/Adaugarea-de-noi-produse-in-comanda)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';

use celmarket\Auth;
Auth::setUserDetails('USERNAME', 'PASSWORD');

use celmarket\Orders\OrdersUpdate;

function addProductsToOrder($cmd, $arrProducts){
    $object = new OrdersUpdate();

    try{
        $response = $object->addProductsToOrder($cmd, $arrProducts);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$cmd = 123456;
$arrProducts = array('Model1', 'Model2');
addProductsToOrder($cmd, $arrProducts);