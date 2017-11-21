<?php
/**
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\AWB\AWBInfo;

#24#
#FUNCTION#
function statusAwb($cmd){
    $object = new AWBInfo();

    try{
        $response = $object->statusAwb($cmd);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
statusAwb(123456);