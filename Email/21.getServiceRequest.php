<?php
/**
 * [RO] Preia datele unei cereri de service (https://github.com/celdotro/marketplace/wiki/Preia-cerere-service)
 * [EN] Get the data of a service request (https://github.com/celdotro/marketplace/wiki/Get-service-request)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Email\EmailCommunication;

#FUNCTION#
function getServiceRequest($id){
    $object = new EmailCommunication();

    try{
        $response = $object->getServiceRequest($id);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$id = 1;
getServiceRequest($id);