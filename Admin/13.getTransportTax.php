<?php
/**
 * [RO] Preia taxa de transport (https://github.com/celdotro/marketplace/wiki/Preia-taxa-de-transport)
 * [EN] Retrieves the transport tax (https://github.com/celdotro/marketplace/wiki/Get-transport-tax)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminInformation;

#FUNCTION#
function getTransportTax($id = null){
    $object = new AdminInformation();

    try{
        $response = $object->getTransportTax($id);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$id = 1;
getTransportTax($id);