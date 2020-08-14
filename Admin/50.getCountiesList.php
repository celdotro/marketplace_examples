<?php
/**
 * [RO] Listeaza toate judetele (https://github.com/celdotro/marketplace/wiki/Listeaza-judetele)
 * [EN] Lists all counties (https://github.com/celdotro/marketplace/wiki/List-counties)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminAddresses;

#FUNCTION#
function getCountiesList(){
    $object = new AdminAddresses();

    try{
        $response = $object->getCountiesList();
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}   

#EXAMPLE#
getCountiesList();