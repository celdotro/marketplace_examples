<?php
/**
 * [RO] Listeaza comenzile in functie de data, nume client, nume produs, id comanda sau numar factura. Limiteaza numarul de inregistrari returnate prin specificarea pozitiei de start si a unei limite superioare. (https://github.com/celdotro/marketplace/wiki/Listare-comenzi)
 * [EN] Lists orders based on date, customer's name, product's name, order id or invoice number. It limits the list by using a start value and an upper limit. (https://github.com/celdotro/marketplace/wiki/List-orders)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




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
// $start = 0;
// $limit = 1;
// // $arrOptions = array(
// //     // 'date'  =>   array(
// //         // 'minDate'  =>   '2018-09-07 08:39:42',
// //         // 'maxDate'  =>  '2018-09-07 08:39:42',
// //     // ),
// //             // 'customer'  =>  'Florin Test Florin Test', // daca valoarea elementului este null, 0 sau sirul vid, atunci filtrul nu va fi aplicat / if the element's value is null, 0 or empty string, then it won't be used as a filter
// //             // 'customerSign'  =>  'ee'
// //             'product'  =>   'laptop', // daca valoarea elementului este null, 0 sau sirul vid, atunci filtrul nu va fi aplicat / if the element's value is null, 0 or empty string, then it won't be used as a filter
// //             'productSign'  =>  'ee'
// //     // 'order'  =>   2000542, // lipsa elementului sau prezenta sa cu valoarea null, 0 sau sirul vid duc la neaplicarea filtrului / if the element is missing or if its value is null, 0 or empty string, then it won't be used as a filter
// //     // 'invoice'  =>  0, // lipsa elementului sau prezenta sa cu valoarea null, 0 sau sirul vid duc la neaplicarea filtrului / if the element is missing or if its value is null, 0 or empty string, then it won't be used as a filter
// //     // 'order_status' => 2, // lipsa elementului sau prezenta sa cu valoarea null, 0, 99 sau sirul vid duc la neaplicarea filtrului / if the element is missing or if its value is null, 0, 99 or empty string, then it won't be used as a filter
// //     // 'group_by_status' => true, // lipsa elementului sau prezenta sa cu valoarea true va determina gruparea in functie de status, valoarea false va determina lispsa gruparii in functie de status / if the element is missing or its value is true, it will group by status, otherwise it will not group by any field
// //     // 'order_by_date_purchased' => 'DESC',
// //     // 'min_order' => 113637
// //     // 'payment_method' => 'Numerar sau ramburs'
// // );
// $arrOptions =array(
//     'product' => 'testdoiphpunit',
//     'customerSign' => 'ee',
//     'order' => 2000542,
//     // 'status' => 2

// );
// $status = 1;

$start = 0;
$limit = 50;
$arrOptions = array(
    // 'date' => array(
    //     'minDate' => '2018.11.15 10:25:57',
    //     'maxDate' => '2018.11.20 10:25:57'
    // )
);
getOrdersList($start, $limit, $arrOptions);