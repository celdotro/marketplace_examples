<?php
/**
 * [RO] Listeaza toate adresele punctelor de ridicare pentru curieri (https://github.com/celdotro/marketplace/wiki/Listare-adrese)
 * [EN] Lists all pick-up points addresses (https://github.com/celdotro/marketplace/wiki/List-addresses)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';

use celmarket\Auth;
Auth::setUserDetails('USERNAME', 'PASSWORD');

use celmarket\Admin\AdminAddress;

#0#
#FUNCTION#
function listAddresses(){
    $object = new AdminAddress();

    try{
        $response = $object->listAddresses();
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}   

#EXAMPLE#
listAddresses();