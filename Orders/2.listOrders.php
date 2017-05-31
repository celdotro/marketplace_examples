<?php
/**
 * [RO] Listeaza comenzile in functie de data, nume client, nume produs, id comanda sau numar factura. Poate limita numarul de inregistrari returnate prin specificarea pozitiei de start si a unei limite superioare.
 * [EN] Lists orders based on date, customer's name, product's name, order id or invoice number. It can limit the list by using a start value and an upper limit.
 */
include __DIR__ . '/../api_include.php';

use celmarket\Auth;
Auth::setUserDetails('USERNAME', 'PASSWORD');

use celmarket\Orders\OrdersList;

#10#
#FUNCTION#
function getOrdersList($start, $limit, $arrOptions){
    $object = new OrdersList();

    try{
        $response = $object->listOrders($start, $limit, $arrOptions);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$start = 0;
$limit = 10;
$arrOptions = array(
    'date'  =>   array(
        'from'  =>   '2017-05-05',
        'to'  =>  '2017-05-07'
    ),
    'customer'  =>   array(
        array( // Semne acceptate / Accepted signs: ee, ne
            'name'  =>  'nume1',
            'sign'  =>  'ee'
        ),
        array(
            'name'  =>  'nume2',
            'sign'  =>  'ne'
        )
    ),
    'product'  =>   array(
        array( // Semne acceptate / Accepted signs: ee, ne
            'name'  =>   'laptop',
            'sign'  =>  'ee'
        )
    ),
    'order'  =>   array(
        array( // Semne acceptate / Accepted signs: gt, st, ge, se, ee, ne
            'id'  =>   '1234',
            'sign'  =>  'ge'
        )
    ),
    'invoice'  =>   array(
        array( // Semnul este implicit egal // The sign is equal by default
            'num'   =>  12
        )
    ),
);
getOrdersList($start, $limit, $arrOptions);