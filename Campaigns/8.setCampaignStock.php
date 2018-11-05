<?php
/**
 * [RO] Seteaza stocul limitat al tuturor produselor din campanie (https://github.com/celdotro/marketplace/wiki/Setare-stoc-limitat)
 * [EN] Set limited stock for all products in a campaign (https://github.com/celdotro/marketplace/wiki/Set-limited-stock)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Campaigns\CampaignsEdit;

#23#
#FUNCTION#
function setCampaignStoc($id, $stoc){
    $object = new CampaignsEdit();

    try{
        $response = $object->setCampaignStoc($id, $stoc);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$id = 94;
$stoc = 100;
setCampaignStoc($id, $stoc);