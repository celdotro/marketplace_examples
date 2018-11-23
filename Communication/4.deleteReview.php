<?php
/**
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Email\EmailCommunication;

function deleteReview($reviewID){
    $object = new EmailCommunication();

    try{
        $response = $object->deleteReview($reviewID);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$reviewID = 113652;
deleteReview($reviewID);