<?php
/**
 * [RO] Genereaza AWB pentru o comanda trimisa ca parametru
 * [EN] Generates an AWB for an order specified as a parameter
 */
include __DIR__ . '/../api_include.php';

use celmarket\Auth;
Auth::setUserDetails('USERNAME', 'PASSWORD');

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