<?php
/**
 * [RO] Editeaza o adresa (https://github.com/celdotro/marketplace/wiki/Editare-adresa)
 * [EN] Updates an address (https://github.com/celdotro/marketplace/wiki/Edit-address)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminAddresses;

#0#
#FUNCTION#
function editAddress($id, $params = array()){
    $object = new AdminAddresses();

    try{
        $response = $object->editAddress($id, $params);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}   

#EXAMPLE#
$id = 123;
$params = array(
    'type'      => 'pickup',
    'county'    => 'Sector 6',
    'city'      => 'Bucuresti',
    'address'   => 'Strada X, Nr. 15',
    'status'    => 1
);

editAddress($id, $params);