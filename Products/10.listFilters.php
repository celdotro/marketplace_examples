<?php
/**
 * [RO] Listeaza filtrele disponibile si datele acestora dupa ce au fost corelate
 * [EN] List available filters after correlation
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';

use celmarket\Auth;
Auth::setUserDetails('USERNAME', 'PASSWORD');

use celmarket\Products\ProductsList;

#11#
#FUNCTION#
function listFilters($filters = null){
    $object = new ProductsList();

    try{
        $response = $object->listFilters($filters);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$filters = json_encode(array('keyword' => '', 'manufacturer' => array(), 'status' => array()));
listFilters($filters);