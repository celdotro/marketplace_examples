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
$orders_id = 113520;
$serie = 'A';
$nr_fact = 111;
$awb = 222;
$idAdresaRidicare = 141;
$observations = 'a';
$products = array(
    array(
    'products_price'    =>  250,
    'cantitate' =>  1,
    'tva'   =>  20,
    'id_prod_com'   =>  4567,
    'deschidere_colet'  =>  1,
    'status_livrare' => 5
    )
);
finishOrderCombined($orders_id, $serie, $nr_fact, $awb, $idAdresaRidicare, $observations, $products);