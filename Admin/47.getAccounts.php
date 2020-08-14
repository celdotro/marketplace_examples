<?php
/**
 * [RO] Listeaza toate conturile de curieri (https://github.com/celdotro/marketplace/wiki/Listeaza-conturile-de-curieri)
 * [EN] Lists all couriers accounts (https://github.com/celdotro/marketplace/wiki/List-courier-accounts)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminCouriers;

#0#
#FUNCTION#
function getAccounts(){
    $object = new AdminCouriers();

    try{
        $response = $object->getAccounts();
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}   

#EXAMPLE#
getAccounts();