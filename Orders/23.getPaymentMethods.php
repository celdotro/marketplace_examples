<?php
/**
 * [RO] Preia lista cu metodele de plata (https://github.com/celdotro/marketplace/wiki/Preia-metode-de-plata)
 * [EN] Retrieves a list of payment methods (https://github.com/celdotro/marketplace/wiki/Get-payment-methods)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Orders\OrdersStatus;

#15#
#FUNCTION#
function getPaymentMethods(){
    $object = new OrdersStatus();

    try{
        $response = $object->getPaymentMethods();
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
getPaymentMethods();