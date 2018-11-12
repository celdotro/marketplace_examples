<?php
/**
 * [RO] Verifica daca pentru o anumita comanda a fost efectuata plata (https://github.com/celdotro/marketplace/wiki/Verifica-plata-pentru-comanda)
 * [EN] Checks if the payment was made for a specific order (https://github.com/celdotro/marketplace/wiki/Check-payment-for-order)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Orders\OrdersData;

#15#
#FUNCTION#
function checkPaymentForOrder($order_id){
    $object = new OrdersData();

    try{
        $response = $object->checkPaymentForOrder($order_id);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
checkPaymentForOrder(113529);