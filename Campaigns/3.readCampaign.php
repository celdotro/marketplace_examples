<?php
/**
 * [RO] Listeaza detaliile unei campanii. Se pot pune filtre pe numele produselor si produselor disponibile (altele decat cele listate in campanie). (https://github.com/celdotro/marketplace/wiki/Citire-campanie)
 * [EN] Lists the details of a specified campaign. Filters can be applied on the names of products and available products (other than those listed in the campaign). (https://github.com/celdotro/marketplace/wiki/Read-Campaign)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Campaigns\CampaignsInfo;

#23#
#FUNCTION#
function readCampaign($name, $products, $availableProducts){
    $object = new CampaignsInfo();

    try{
        $response = $object->readCampaign($name, $products, $availableProducts);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$name = 'Campanie Test';
$products = array(
    'start'     =>  0,
    'limit'     =>  10,
    'search'    =>  array(
        'byName'    =>  'Nume1'
    )
);
$availableProducts =  array(
    'start'     =>  0,
    'limit'     =>  10,
    'search'    =>  array(
        'byName'    =>  'Nume2'
    )
);
readCampaign($name, $products, $availableProducts);