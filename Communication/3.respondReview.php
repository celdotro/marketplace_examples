<?php
/**
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Email\EmailCommunication;

function respondReview($reviewID, $response){
    $object = new EmailCommunication();

    try{
        $response = $object->respondReview($reviewID, $response);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$reviewID = 113652;
$response = 'ABC';
respondReview($reviewID, $response);