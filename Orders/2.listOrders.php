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
        'to'  =>  '2017-05-31 23:59:59'
    ),
    'customer'  =>   array(
        array( // Semne acceptate / Accepted signs: ee, ne
            'name'  =>  'nume1', // daca valoarea elementului este null, 0 sau sirul vid, atunci filtrul nu va fi aplicat / if the element's value is null, 0 or empty string, then it won't be used as a filter
            'sign'  =>  'ee'
        ),
        array(
            'name'  =>  'nume2',
            'sign'  =>  'ne'
        )
    ),
    'product'  =>   array(
        array( // Semne acceptate / Accepted signs: ee, ne
            'name'  =>   'laptop', // daca valoarea elementului este null, 0 sau sirul vid, atunci filtrul nu va fi aplicat / if the element's value is null, 0 or empty string, then it won't be used as a filter
            'sign'  =>  'ee'
        )
    ),
    'order'  =>   0, // lipsa elementului sau prezenta sa cu valoarea null, 0 sau sirul vid duc la neaplicarea filtrului / if the element is missing or if its value is null, 0 or empty string, then it won't be used as a filter
    'invoice'  =>  0 // lipsa elementului sau prezenta sa cu valoarea null, 0 sau sirul vid duc la neaplicarea filtrului / if the element is missing or if its value is null, 0 or empty string, then it won't be used as a filter
);
getOrdersList($start, $limit, $arrOptions);