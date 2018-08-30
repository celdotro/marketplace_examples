<?php
/**
 * [RO] Returneaza o lista cu ID-uri si denumirea mesajelor predefinite pentru anumite actiuni legate de comanda (https://github.com/celdotro/marketplace/wiki/Listare-email-uri-predefinite-pentru-comenzi)
 * [EN] Returns a list of IDs and names of predefined emails for actions related to an order (https://github.com/celdotro/marketplace/wiki/Predefined-email-list-for-orders)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Email\EmailOrder;

function getOrderEmailList(){
    $object = new EmailOrder();

    try{
        $response = $object->getOrderEmailList();
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
getOrderEmailList();