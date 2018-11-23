<?php
/**
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Email\EmailCommunication;

function verifyReview($reviewID, $status){
    $object = new EmailCommunication();

    try{
        $response = $object->verifyReview($reviewID, $status);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$reviewID = 113652;
$status = 1;
verifyReview($reviewID, $status);