<?php
/**
 * [RO] Actualizeaza informatiil referitoare la taxele percepute pentru livrare
 * [EN] Updates information about delivery taxes
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminInformation;

#FUNCTION#
function getDeliveryInformation(){
    $object = new AdminInformation();

    try{
        $response = $object->getDeliveryInformation();
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#

getDeliveryInformation();