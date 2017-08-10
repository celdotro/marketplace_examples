<?php
/**
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';

use celmarket\Auth;
Auth::setUserDetails('USERNAME', 'PASSWORD');

use celmarket\Admin\AdminAccount;

#0#
#FUNCTION#
function updateAccountInformation($cif = NULL, $iban = NULL, $telephone = NULL){
    $object = new AdminAccount();

    try{
        $response = $object->updateAccountInformation($cif, $iban, $telephone);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$cif = 'RO123456';
$iban = 'ROXXXXXX';
$telephone = '+40799999999';
updateAccountInformation($cif, $iban, $telephone);