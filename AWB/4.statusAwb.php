<?php
/**
<<<<<<< HEAD
 * [RO] Returneaza statusul unui AWB (https://github.com/celdotro/marketplace/wiki/Status-AWB)
 * [EN] Returns information about an AWB's status (https://github.com/celdotro/marketplace/wiki/AWB-Status)
=======
>>>>>>> 35b7f8ca730692febb6fcc50d603ea3edef92a02
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