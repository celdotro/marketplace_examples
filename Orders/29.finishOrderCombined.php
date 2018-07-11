<?php
/**
 * [RO] Finalizeaza o comanda parcurgand automat toti pasii (https://github.com/celdotro/marketplace/wiki/Finalizere-combinata-a-comenzii)
 * [EN] Finishes an order by automatically taking all the necessary steps (https://github.com/celdotro/marketplace/wiki/Finish-order-combined)
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
$orders_id = 123456;
$serie = 'Serie';
$nr_fact = 123456;
$awb = 111222333;
$idAdresaRidicare = 1;
$observations = 'Observatii';
$products = array(
    'products_price'    =>  305.44,
    'cantitate' =>  1,
    'tva'   =>  20,
    'id_prod_com'   =>  987654,
    'deschidere_colet'  =>  1,
    'status_livrare' => 0
);
finishOrderCombined($orders_id, $serie, $nr_fact, $awb, $idAdresaRidicare, $observations, $products);