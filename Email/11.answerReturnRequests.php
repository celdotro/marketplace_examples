<?php
/**
 * [RO] Raspunde unei cereri de retur (https://github.com/celdotro/marketplace/wiki/Raspunde-cererii-de-retur)
 * [EN] Send an answer to a return request (https://github.com/celdotro/marketplace/wiki/Answer-return-request)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Email\EmailCommunication;

#FUNCTION#
function answerReturnRequests($id, $answer, $images){
    $object = new EmailCommunication();

    try{
        $response = $object->answerReturnRequests($id, $answer, $images);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$id = 123456;
$answer = 'TEST';
$images = array('ping.png' => fopen(__DIR__ . '/ping.png', 'rb'));
answerReturnRequests($id, $answer, $images);