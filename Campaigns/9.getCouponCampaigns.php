<?php
/**
 * [RO] Preia toate campaniile de cupoane (https://github.com/celdotro/marketplace/wiki/Preia-cupoanele-campaniei)
 * [EN] Retrieves a list of coupon campaigns (https://github.com/celdotro/marketplace/wiki/Get-Coupon-Campaigns)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Campaigns\CampaignsInfo;


#FUNCTION#
function getCouponCampaigns(){
    $object = new CampaignsInfo();

    try{
        $response = $object->getCouponCampaigns();
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
getCouponCampaigns();