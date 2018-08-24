<?php
/**
 * [RO] Sterge AWB-ul aferent unei comenzi trimisa ca parametru (https://github.com/celdotro/marketplace/wiki/Stergere-AWB)
 * [EN] Deletes the AWB of an order specified as a parameter (https://github.com/celdotro/marketplace/wiki/AWB-Delete)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\AWB\AWBDelete;

#24#
#FUNCTION#
function deleteAwb($cmd){
    $object = new AWBDelete();

    try{
        $response = $object->deleteAwb($cmd);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
deleteAwb(2000542);