<?php
/**
 * [RO] Actualizeaza o taxa de transport (https://github.com/celdotro/marketplace/wiki/Actualizeaza-taxa-de-transport)
 * [EN] Updates a transport tax (https://github.com/celdotro/marketplace/wiki/Update-transport-tax)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminInformation;

#FUNCTION#
function updateTransportTax($id, $newValue = null, $newLimit = null){
    $object = new AdminInformation();

    try{
        $response = $object->updateTransportTax($id, $newValue, $newLimit);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$id = 1;
$newValue = 150;
$newLimit = 150;
updateTransportTax($id, $newValue, $newLimit);