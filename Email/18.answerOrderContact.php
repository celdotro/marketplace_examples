<?php
/**
 * [RO] Trimite raspuns unei intrebari aferenta comenzii (https://github.com/celdotro/marketplace/wiki/Raspunde-intrebarii-comenzii)
 * [EN] Give an answer to an order's question (https://github.com/celdotro/marketplace/wiki/Answer-order-question)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Email\EmailCommunication;

#0#
#FUNCTION#
function answerOrderContact($id, $answer){
    $object = new EmailCommunication();

    try{
        $response = $object->answerOrderContact($id, $answer);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$id = 1;
$answer = 'Raspuns';
answerOrderContact($id, $answer);