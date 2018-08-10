<?php
/**
 * [RO] Preia numarul de cereri de retur la care nu s-a raspuns (https://github.com/celdotro/marketplace/wiki/Numara-cererile-de-retur)
 * [EN] Retrieves the number of unanswered return requests (https://github.com/celdotro/marketplace/wiki/Count-return-requests)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Email\EmailCommunication;

#FUNCTION#
function countProductEmails(){
    $object = new EmailCommunication();

    try{
        $response = $object->countProductEmails();
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
countProductEmails();