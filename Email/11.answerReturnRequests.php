<?php
/**
 * [RO] Raspunde unei cereri de retur (https://github.com/celdotro/marketplace/wiki/Raspunde-cererii-de-retur)
 * [EN] Send an answer to a return request (https://github.com/celdotro/marketplace/wiki/Retrieve-service-requests)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Email\EmailCommunication;

#FUNCTION#
function answerReturnRequests($id, $answer){
    $object = new EmailCommunication();

    try{
        $response = $object->answerReturnRequests($id, $answer);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$id = 126972;
$answer = 'TEST';
answerReturnRequests($id, $answer);