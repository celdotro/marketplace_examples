<?php
/**
 * [RO] Trimite mail continand raportul unui bug intalnit in sistem (https://github.com/celdotro/marketplace/wiki/Trimitere-raport-bug)
 * [EN] Send an email containing a report about a bug encountered in the system (https://github.com/celdotro/marketplace/wiki/Send-bug-report)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Email\EmailContact;

function sendBugReport($message, $debug){
    $object = new EmailContact();

    try{
        $response = $object->sendBugReport($message, $debug);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$message = 'Continutul email-ului';
$debug = 'Parametri debug';
sendBugReport($message, $debug);