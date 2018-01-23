<?php
/**
 * [RO] Raspunde unei cereri de service (https://github.com/celdotro/marketplace/wiki/Raspunde-unei-cereri-de-service)
 * [EN] Send an answer to a service request (https://github.com/celdotro/marketplace/wiki/Answer-service-request)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Email\EmailCommunication;

#FUNCTION#
function answerServiceRequest($id, $answer){
    $object = new EmailCommunication();

    try{
        $response = $object->answerServiceRequest($id, $answer);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$id = 126972;
$answer = 'TEST';
answerServiceRequest($id, $answer);