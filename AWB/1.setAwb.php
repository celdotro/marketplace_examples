<?php
include __DIR__ . '/../api_include.php';

use celmarket\AWB\AWBImport;

#24#
#FUNCTION#
function setAwb($cmd){
    $object = new AWBImport();

    try{
        $response = $object->setAwb($cmd);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
setAwb(564076);