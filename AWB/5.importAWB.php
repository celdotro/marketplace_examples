<?php
/**
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\AWB\AWBImport;

#24#
#FUNCTION#
function importAwb($cmd, $awb, $idAdresaRidicare){
    $object = new AWBImport();

    try{
        $response = $object->importAwb($cmd, $awb, $idAdresaRidicare);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
importAwb(123456, 100, 131);