<?php
/**
 * [RO] Listeaza statusurile ce pot fi folosite pentru anularea unei comenzi (https://github.com/celdotro/marketplace/wiki/Listare-statusuri-anulare)
 * [EN] Lists the statuses that can be used for cancelling an order (https://github.com/celdotro/marketplace/wiki/List-order-cancelling-statuses)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';

use celmarket\Auth;
Auth::setUserDetails('USERNAME', 'PASSWORD');

use celmarket\Orders\OrdersStatus;

#25#
#FUNCTION#
function listCancellingStatuses(){
    $object = new OrdersStatus();

    try{
        $response = $object->listCancellingStatuses();
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
listStatuses();