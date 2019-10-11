<?php
/**
 * [RO] Preia adresele de contact (https://github.com/celdotro/marketplace/wiki/Preia-adrese-contact)
 * [EN] Get contact addresses (https://github.com/celdotro/marketplace/wiki/Get-contact)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminAccount;

#FUNCTION#
function getContact(){
    $object = new AdminAccount();

    try{
        $response = $object->getContact();
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
getContact();