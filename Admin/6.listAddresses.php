<?php
/**
 * [RO] Listeaza toate adresele (https://github.com/celdotro/marketplace/wiki/Listare-adrese)
 * [EN] Lists all addresses (https://github.com/celdotro/marketplace/wiki/List-addresses)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminAddresses;

#FUNCTION#
function getAddresses(){
    $object = new AdminAddresses();

    try{
        $response = $object->getAddresses();
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}   

#EXAMPLE#
getAddresses();