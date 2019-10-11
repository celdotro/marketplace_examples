<?php
/**
 * [RO] Schimba modul de plata al unei comenzi (https://github.com/celdotro/marketplace/wiki/Schimba-modul-de-plata-al-unei-comenzi)
 * [EN] Change an order's payment method (https://github.com/celdotro/marketplace/wiki/Change-order-payment-method)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Orders\OrdersUpdate;

#19#
#FUNCTION#
function changeOrderPaymentMethod($cmd, $paymentMethod){
    $object = new OrdersUpdate();

    try{
        $response = $object->changeOrderPaymentMethod($cmd, $paymentMethod);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$order = 123456;
$paymentMethod = 'Ordin de Plata';
changeOrderPaymentMethod($order, $paymentMethod);