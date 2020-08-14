<?php
/**
 * [RO] Adauga o persoana de contact noua (https://github.com/celdotro/marketplace/wiki/Adauga-persoana-de-contact)
 * [EN] Adds a new contact person (https://github.com/celdotro/marketplace/wiki/Add-contact-person)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminContacts;

#0#
#FUNCTION#
function addContact($params = array()){
    $object = new AdminContacts();

    try{
        $response = $object->addContact($params);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}   

#EXAMPLE#
$params = array(
    'type'      => 'shipping',
    'name'      => 'Ion Popescu`',
    'email'     => 'email@domain.com',
    'phone'     => '0724123456',
    'status'    => 1
);

addContact($params);