<?php
/**
 * [RO] Elimina un produs din campanii (https://github.com/celdotro/marketplace/wiki/Eliminare-produs-din-campanie)
 * [EN] Removes a product from any campaign (https://github.com/celdotro/marketplace/wiki/Remove-Product-from-Campaign)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';

use celmarket\Auth;
Auth::setUserDetails('USERNAME', 'PASSWORD');

use celmarket\Campaigns\CampaignsEdit;

#23#
#FUNCTION#
function removeProduct($name, $productModel){
    $object = new CampaignsEdit();

    try{
        $response = $object->removeProduct($name, $productModel);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$name = 'Campanie Test';
$productModel = 'Model1';
removeProduct($name, $productModel);