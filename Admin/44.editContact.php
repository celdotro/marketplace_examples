<?php
/**
 * [RO] Editeaza o persoana de contact (https://github.com/celdotro/marketplace/wiki/Editare-persoana-de-contact)
 * [EN] Edit a contact person (https://github.com/celdotro/marketplace/wiki/Edit-contact-person)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminContacts;

#0#
#FUNCTION#
function editContact($id, $params = array()){
    $object = new AdminContacts();

    try{
        $response = $object->editContact($id, $params);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}   

#EXAMPLE#
$id = 123;
$params = array(
    'type'      => 'shipping',
    'name'      => 'Ion Popescu`',
    'email'     => 'email@domain.com',
    'phone'     => '0724123456',
    'status'    => 1
);

editContact($id, $params);