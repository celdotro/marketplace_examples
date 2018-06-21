<?php
/**
 * [RO] Preia lista MCC-urilor atribuite (https://github.com/celdotro/marketplace/wiki/Preia-MCC-uri-atribuite)
 * [EN] Get list of currently used MCC (https://github.com/celdotro/marketplace/wiki/Get-currently-used-MCC)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminInformation;

#FUNCTION#
function getCurrentMcc(){
    $object = new AdminInformation();

    try{
        $response = $object->getCurrentMcc();
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
getCurrentMcc();