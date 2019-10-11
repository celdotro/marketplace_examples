<?php
/**
 * [RO] Inregistreaza o data personalizata a finalizarii comenzii (https://github.com/celdotro/marketplace/wiki/Schimba-data-finalizarii)
 * [EN] Submits a custom date for order finishing (https://github.com/celdotro/marketplace/wiki/Change-finishing-date)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Orders\OrdersUpdate;


#FUNCTION#
function changeFinishingDate($oid, $date){
    $object = new OrdersUpdate();

    try{
        $response = $object->changeFinishingDate($oid, $date);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
changeFinishingDate(123456, '2019-04-23');