<?php
/**
 * [RO] Actualizeaza anumite date ale produselor dintr-o comanda (pentru lista completa de date, vezi sectiunea de exemplu) (https://github.com/celdotro/marketplace/wiki/Actualizare-comenzi)
 * [EN] Updates certain data for the products that belong to a certain order (for the full list of data that can be updated, check the example section) (https://github.com/celdotro/marketplace/wiki/Update-orders)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';

use celmarket\Auth;
Auth::setUserDetails('USERNAME', 'PASSWORD');

use celmarket\Orders\OrdersUpdate;

#19#
#FUNCTION#
function updateProductsFromOrder($cmd, $arrModels){
    $object = new OrdersUpdate();

    try{
        $response = $object->updateProductsFromOrder($cmd, $arrModels);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$cmd = 123456;
$products = array(
    array(
        'products_price'    =>  305.44,
        'cantitate' =>  1,
        'tva'   =>  20,
        'id_prod_com'   =>  987654,
        'deschidere_colet'  =>  1,
        'status_livrare' => 0
    )
);
updateProductsFromOrder($cmd, $products);