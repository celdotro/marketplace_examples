<?php
/**
 * [RO] Listeaza AWB-ul pentru o comanda trimisa ca parametru (https://github.com/celdotro/marketplace/wiki/Listare-AWB)
 * [EN] Prints the AWB for an order specified as a parameter (https://github.com/celdotro/marketplace/wiki/AWB-Print)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\AWB\AWBInfo;

#24#
#FUNCTION#
function printAwb($cmd){
    $object = new AWBInfo();

    try{
        $response = $object->printAwb($cmd);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
printAwb(123456);