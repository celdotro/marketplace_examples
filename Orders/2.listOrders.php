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
        array(
            'datetime'  =>   '2017-05-05',
            'sign'  =>  'ee'
        )
    ),
    'customer'  =>   array(
        array(
            'name'  =>  'nume1',
            'sign'  =>  'ee'
        ),
        array(
            'name'  =>  'nume2',
            'sign'  =>  'ne'
        )
    ),
    'product'  =>   array(
        array(
            'name'  =>   'laptop',
            'sign'  =>  'ee'
        )
    ),
    'order'  =>   array(
        array(
            'id'  =>   '1234',
            'sign'  =>  'ge'
        )
    ),
    'invoice'  =>   array(
        array(
            'num'   =>  12
        )
    ),
);
getOrdersList($start, $limit, $arrOptions);