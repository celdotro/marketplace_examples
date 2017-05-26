<?php
include __DIR__ . '/../api_include.php';

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