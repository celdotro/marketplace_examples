<?php
/**
 * [RO] Genereaza AWB pentru o comanda trimisa ca parametru
 * [EN] Generates an AWB for an order specified as a parameter
 */
include __DIR__ . '/../api_include.php';

use celmarket\Auth;
Auth::setUserDetails('USERNAME', 'PASSWORD');

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
printAwb(564076);