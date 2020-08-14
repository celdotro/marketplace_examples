<?php
/**
 * [RO] Adauga o adresa noua (https://github.com/celdotro/marketplace/wiki/Adaugare-adresa)
 * [EN] Adds a new address (https://github.com/celdotro/marketplace/wiki/Add-address)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminAddresses;

#0#
#FUNCTION#
function addAddress($params = array()){
    $object = new AdminAddresses();

    try{
        $response = $object->addAddress($params);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}   

#EXAMPLE#
$params = array(
    'type'      => 'pickup',
    'county'    => 'Sector 6',
    'city'      => 'Bucuresti',
    'address'   => 'Strada X, nr. 10',
    'status'    => 1
);

addAddress($params);