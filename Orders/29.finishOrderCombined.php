<?php
/**
 * [RO] Finalizeaza o comanda (https://github.com/celdotro/marketplace/wiki/Finalizeaza-comanda)
 * [EN] Finishes an order (https://github.com/celdotro/marketplace/wiki/Finish-order)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Orders\OrdersData;

#25#
#FUNCTION#
function finishOrderCombined($orders_id, $serie, $nr_fact, $awb, $idAdresaRidicare, $observations, $products){
    $object = new OrdersData();

    try{
        $response = $object->finishOrderCombined($orders_id, $serie, $nr_fact, $awb, $idAdresaRidicare, $observations, $products);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$orders_id = 2004302;
$serie = 'TEST';
$nr_fact = 123456;
$awb = 123455;
$idAdresaRidicare = 727;
$observations = 'Observatii';
$products = array(
    'products_price'    =>  24,
    'cantitate' =>  1,
    'tva'   =>  19,
    'id_prod_com'   =>  3402837,
    'deschidere_colet'  =>  0,
    'status_livrare' => 0
);
finishOrderCombined($orders_id, $serie, $nr_fact, $awb, $idAdresaRidicare, $observations, $products);