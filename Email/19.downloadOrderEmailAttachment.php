<?php
/**
 * [RO] Descarca un atasament aferent email-ului unei comenzi si informatii relevante despre acesta (https://github.com/celdotro/marketplace/wiki/Descarca-atasamentul-email-ului-comenzii)
 * [EN] Downloads an attachment belonging to an order's email and other relevant information regarding the attachment (https://github.com/celdotro/marketplace/wiki/Download-order-email-attachment)
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
$emailID = 1;
$attachmentNumber = 1;
downloadOrderEmailAttachment($emailID, $attachmentNumber);