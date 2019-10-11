<?php
/**
 * [RO] Elimina un MCC atribuit contului curent (https://github.com/celdotro/marketplace/wiki/Elimina-MCC)
 * [EN] Remove an MCC code linked to the current account (https://github.com/celdotro/marketplace/wiki/Remove-MCC-Code)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminInformation;

#FUNCTION#
function removeMccCode($mcc){
    $object = new AdminInformation();

    try{
        $response = $object->removeMccCode($mcc);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$mcc = '0742';
removeMccCode($mcc);