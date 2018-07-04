<?php
/**
 * [RO] Schimba modul de plata al unei comenzi (https://github.com/celdotro/marketplace/wiki/Schimba-modul-de-plata-al-unei-comenzi)
 * [EN] Change an order's payment method (https://github.com/celdotro/marketplace/wiki/Change-order-payment-method)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Orders\OrdersUpdate;

#19#
#FUNCTION#
function changeOrderPaymentMethod($cmd, $paymentMethod, $paidSum = null){
    $object = new OrdersUpdate();

    try{
        $response = $object->changeOrderPaymentMethod($cmd, $paymentMethod, $paidSum);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$order = 113638;
$paymentMethod = 'Ordin de Plata';
$paidSum = 10;
changeOrderPaymentMethod($order, $paymentMethod, $paidSum);