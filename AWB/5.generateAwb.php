<?php
/**
 * [RO] Generare AWB (https://github.com/celdotro/marketplace/wiki/Generare-AWB)
 * [EN] Generate AWB (https://github.com/celdotro/marketplace/wiki/Generate-AWB)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\AWB\AWBImport;

#24#
#FUNCTION#
function generateAwb($orders_id, $idAddress){
    $object = new AWBImport();

    try{
        $response = $object->generateAwb($orders_id, $idAddress);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
generateAwb(123456, 100);