<?php
/**
 * [RO] Adaugarea unui grup de produse intr-o campanie (https://github.com/celdotro/marketplace/wiki/Adaugare-grup-de-produse-in-campanie)
 * [EN] Adds a group of products to a campaign (https://github.com/celdotro/marketplace/wiki/Add-products-group-to-campaign)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Campaigns\CampaignsEdit;


#FUNCTION#
function addAllUsingFilters($name, $manufacturer, $categories, $idcampanie, $numecampanie){
    $object = new CampaignsEdit();

    try{
        $response = $object->addAllUsingFilters($name, $manufacturer, $categories, $idcampanie, $numecampanie);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$name = 'Product\'s name';
$manufacturer = 'Manufacturer\'s name';
$categories = 'Category\'s ID';
$idcampanie = 1;
$numecampanie = 'Campaign name';
addAllUsingFilters($name, $manufacturer, $categories, $idcampanie, $numecampanie);