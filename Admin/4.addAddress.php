<?php
/**
 * [RO] Adauga o adresa pentru ridicarea coletelor de catre curieri
 * [EN] Adds a new pick-up address that will be sent to couriers
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';

use celmarket\Auth;
Auth::setUserDetails('USERNAME', 'PASSWORD');

use celmarket\Admin\AdminAddress;

#0#
#FUNCTION#
function addAddress($address){
    $object = new AdminAddress();

    try{
        $response = $object->addAddress($address);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}   

#EXAMPLE#
$address = 'Str. X...';

addAddress($address);