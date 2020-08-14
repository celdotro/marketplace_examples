<?php
/**
 * [RO] Listeaza toate persoanele de contact (https://github.com/celdotro/marketplace/wiki/Listeaza-persoanele-de-contact)
 * [EN] Lists all contact persons (https://github.com/celdotro/marketplace/wiki/List-contact-persons)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminContacts;

#0#
#FUNCTION#
function getContacts(){
    $object = new AdminContacts();

    try{
        $response = $object->getContacts();
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}   

#EXAMPLE#
getContacts();