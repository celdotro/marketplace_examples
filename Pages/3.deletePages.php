<?php
/**
 * [RO] Sterge o pagina (https://github.com/celdotro/marketplace/wiki/Stergere-pagini)
 * [EN] Deletes a page (https://github.com/celdotro/marketplace/wiki/Remove-page)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';

use celmarket\Auth;
Auth::setUserDetails('USERNAME', 'PASSWORD');

use celmarket\Pages\PagesDelete;

#22#
#FUNCTION#
function deletePage($pageID){
    $object = new PagesDelete();

    try{
        $response = $object->deletePage($pageID);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$pageID = 28;
deletePage($pageID);