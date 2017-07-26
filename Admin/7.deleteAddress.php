<?php
/**
 * [RO] Stergerea adresei unui punct de ridicare pentru curieri (https://github.com/celdotro/marketplace/wiki/Stergere-adresa)
 * [EN] Delete a pick-up point's address (https://github.com/celdotro/marketplace/wiki/Delete-address)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';

use celmarket\Auth;
Auth::setUserDetails('USERNAME', 'PASSWORD');

use celmarket\Admin\AdminAddress;

#0#
#FUNCTION#
function deleteAddress($id){
    $object = new AdminAddress();

    try{
        $response = $object->deleteAddress($id);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}   

#EXAMPLE#
$id = 1;

deleteAddress($id);