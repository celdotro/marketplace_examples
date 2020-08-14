<?php
/**
 * [RO] Listeaza toate orasele dintr-un judet (https://github.com/celdotro/marketplace/wiki/Listeaza-orase)
 * [EN] Lists all cities from a specific county (https://github.com/celdotro/marketplace/wiki/List-cities)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminAddresses;

#FUNCTION#
function getCitiesList($county){
    $object = new AdminAddresses();

    try{
        $response = $object->getCitiesList($county);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}   

#EXAMPLE#
$county = 'Arad';

getCitiesList($county);