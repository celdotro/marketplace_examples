<?php
/**
 * [RO] Actualizeaza un produs cu un pret promotional diferit de cel implicit din campanie (https://github.com/celdotro/marketplace/wiki/Salvare-produs-in-campanie)
 * [EN] Updates a product with a promotional price different than the campaign default (https://github.com/celdotro/marketplace/wiki/Save-Product-in-Campaign)
 */
include __DIR__ . '/../api_include.php';

use celmarket\Auth;
Auth::setUserDetails('USERNAME', 'PASSWORD');

use celmarket\Campaigns\CampaignsEdit;

#23#
#FUNCTION#
function saveProduct($name, $productModel, $promoPrice){
    $object = new CampaignsEdit();

    try{
        $response = $object->saveProduct($name, $productModel, $promoPrice);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$name = 'Campanie Test';
$productModel = 'Model1';
$promoPrice = 100;
saveProduct($name, $productModel, $promoPrice);