<?php
/**
 * [RO] Actualizeaza adresa unui punct de ridicare pentru curieri (https://github.com/celdotro/marketplace/wiki/Editare-adresa)
 * [EN] Updates address information of a pick-up point (https://github.com/celdotro/marketplace/wiki/Edit-address)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminAddress;

#0#
#FUNCTION#
function editAddress($id, $address){
    $object = new AdminAddress();

    try{
        $response = $object->editAddress($id, $address);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}   

#EXAMPLE#
$id = 1;
$address = 'Str. Y...';

editAddress($id, $address);