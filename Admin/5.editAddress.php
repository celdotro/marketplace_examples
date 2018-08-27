<?php
/**
 * [RO] Actualizeaza adresa unui punct de ridicare pentru curieri (https://github.com/celdotro/marketplace/wiki/Editare-adresa)
 * [EN] Updates address information of a pick-up point (https://github.com/celdotro/marketplace/wiki/Edit-address)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminAddress;

#0#
#FUNCTION#
function editAddress($id, $address, $courier){
    $object = new AdminAddress();

    try{
        $response = $object->editAddress($id, $address, $courier);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}   

#EXAMPLE#
$id = 266;
$address = 'Str. Y...';
$courier = 0;

editAddress($id, $address, $courier);