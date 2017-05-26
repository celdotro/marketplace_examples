<?php
/**
 * [RO] Returneaza datele paginilor disponibile
 * [EN] Returns the data for all the available pages
 */
include __DIR__ . '/../api_include.php';

use celmarket\Pages\PagesData;

#20#
#FUNCTION#
function getPages(){
    $object = new PagesData();

    try{
        $response = $object->getPages();
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
getPages();