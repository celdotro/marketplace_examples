<?php
/**
 * [RO] Generare AWB (https://github.com/celdotro/marketplace/wiki/Generare-AWB)
 * [EN] Generate AWB (https://github.com/celdotro/marketplace/wiki/Generate-AWB)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Orders\OrdersAWB;

#24#
#FUNCTION#
function generateAwb($awbData, $awbSender, $awbReceiver = array(), $awbOptions = array()){
    $object = new OrdersAWB();

    try{
        $response = $object->generateAwb($awbData, $awbSender, $awbReceiver, $awbOptions);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$awbData = array(
    'orders_id'         => 123,
    'courier_account'   => 123,
    'envelopes'         => 0,
    'packages'          => 1,
    'weight'            => 1
);

$awbSender = array(
    'address_id'        => 123,
    'contact_id'        => 123
);

generateAwb($awbData, $awbSender);