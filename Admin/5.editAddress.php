<?php
/**
 * [RO] Actualizeaza adresa unui punct de ridicare pentru curieri
 * [EN] Updates address information of a pick-up point
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';

use celmarket\Auth;
Auth::setUserDetails('USERNAME', 'PASSWORD');

use celmarket\Admin\AdminAddress;

#0#
#FUNCTION#
function editAddress($id, $address){
    $object = new AdminAddress();

    try{
        $response = $object->editAddress($id, $address);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}   

#EXAMPLE#
$id = 1;
$address = 'Str. Y...';

editAddress($id, $address);