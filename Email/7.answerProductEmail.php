<?php
/**
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Email\EmailCommunication;

#0#
#FUNCTION#
function answerProductEmail($questionID, $answer){
    $object = new EmailCommunication();

    try{
        $response = $object->answerProductEmail($questionID, $answer);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$questionID = 1;
$answer = 'Minim 10 caractere';
answerProductEmail($questionID, $answer);