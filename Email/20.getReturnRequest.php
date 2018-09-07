<?php
/**
 * [RO] Preia datele unei cereri de retur (https://github.com/celdotro/marketplace/wiki/Preia-cerere-retur)
 * [EN] Get the data of a return request (https://github.com/celdotro/marketplace/wiki/Get-return-request)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Email\EmailCommunication;

#FUNCTION#
function getReturnRequest($id){
    $object = new EmailCommunication();

    try{
        $response = $object->getReturnRequest($id);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$id = 1;
getReturnRequest($id);