<?php
/**
 * [RO] Sterge AWB-ul aferent unei comenzi trimisa ca parametru
 * [EN] Deletes the AWB of an order specified as a parameter
 */
include __DIR__ . '/../api_include.php';

use celmarket\Auth;
Auth::setUserDetails('USERNAME', 'PASSWORD');

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
deleteAwb(564076);