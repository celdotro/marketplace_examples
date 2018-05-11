<?php
/**
 * [RO] Marcheaza un produs pentru retur (https://github.com/celdotro/marketplace/wiki/Retur-produs)
 * [EN] Marks a product for return (https://github.com/celdotro/marketplace/wiki/Product-return)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';



use celmarket\Orders\OrdersUpdate;

#25#
#FUNCTION#
function returProduct($orderId, $reason, $model){
    $object = new OrdersUpdate();

    try{
        $response = $object->returProduct($orderId, $reason, $model);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
#EXAMPLE#
$orderId = 113614;
$reason = 'Motiv';
$model = 'jhg-f001';
returProduct($orderId, $reason, $model);