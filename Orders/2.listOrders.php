<?php
/**
 * [RO] Listeaza comenzile unui client raportate la o anumita data. Poate limita numarul de inregistrari returnate prin specificarea pozitiei de start si a unei limite superioare.
 * [EN] Lists a clients orders taking into account the specified date. It can limit the list by using a start value and an upper limit.
 */
include __DIR__ . '/../api_include.php';

use celmarket\Auth;
Auth::setUserDetails('USERNAME', 'PASSWORD');

use celmarket\Orders\OrdersList;

#10#
#FUNCTION#
function getOrdersList($start, $limit, $data, $sign, $customer){
    $object = new OrdersList();

    try{
        $response = $object->listOrders($start, $limit, $data, $sign, $customer);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
getOrdersList(0, 15, '2017-04-04', 'ee', 'client1');