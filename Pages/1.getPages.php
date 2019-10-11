<?php
/**
 * [RO] Returneaza datele paginilor disponibile (https://github.com/celdotro/marketplace/wiki/Listare-Pagini)
 * [EN] Returns the data for all the available pages (https://github.com/celdotro/marketplace/wiki/List-pages)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




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