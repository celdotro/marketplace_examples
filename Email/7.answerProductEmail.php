<?php
/**
 * [RO] Trimite un raspuns catre email-ul unui client referitor la un anumit produs (https://github.com/celdotro/marketplace/wiki/Raspunde-email-ului-unui-produs)
 * [EN] Answer a specific email for a product (https://github.com/celdotro/marketplace/wiki/Answer-a-specific-email-for-a-product)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Email\EmailCommunication;

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