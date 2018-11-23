<?php
/**
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Email\EmailCommunication;

function getReviewAnswers($reviewID){
    $object = new EmailCommunication($reviewID);

    try{
        $response = $object->getReviewAnswers($reviewID);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$reviewID = 113652;
getReviewAnswers($reviewID);