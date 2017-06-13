<?php
/**
 * [RO] Adauga un produs intr-o campanie si ii aplica discountul acestia (https://github.com/celdotro/marketplace/wiki/Adaugare-produs-in-campanie)
 * [EN] Adds a product to a campaign and applies the campaign's discount (https://github.com/celdotro/marketplace/wiki/Add-Product-to-Campaign)
 */
include __DIR__ . '/../api_include.php';

use celmarket\Auth;
Auth::setUserDetails('USERNAME', 'PASSWORD');

use celmarket\Campaigns\CampaignsEdit;

#23#
#FUNCTION#
function addProduct($name, $productModel){
    $object = new CampaignsEdit();

    try{
        $response = $object->addProduct($name, $productModel);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$name = 'Campanie Test';
$productModel = 'Model1';
addProduct($name, $productModel);