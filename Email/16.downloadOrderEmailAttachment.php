<?php
/**
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Email\EmailOrder;

function downloadOrderEmailAttachment($emailID, $attachmentNumber){
    $object = new EmailOrder();

    try{
        $response = $object->downloadOrderEmailAttachment($emailID, $attachmentNumber);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$emailID = 88;
$attachmentNumber = 1;
downloadOrderEmailAttachment($emailID, $attachmentNumber);