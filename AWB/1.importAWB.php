<?php
/**
 * [RO] Un AWB poate fi creat pentru o singura comanda (https://github.com/celdotro/marketplace/wiki/Creare-AWB)
 * [EN] An AWB can be used for one order (https://github.com/celdotro/marketplace/wiki/AWB-Import)
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
importAwb(113526, 849924190, 204);