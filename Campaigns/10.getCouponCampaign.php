<?php
/**
 * [RO] Datele aferente unei campanii de cupoane (https://github.com/celdotro/marketplace/wiki/Date-campanie-cupoane)
 * [EN] Get coupon campaign data (https://github.com/celdotro/marketplace/wiki/Coupon-Campaign-Data)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Campaigns\CampaignsInfo;


#FUNCTION#
function getCouponCampaign($campaignId){
    $object = new CampaignsInfo();

    try{
        $response = $object->getCouponCampaign($campaignId);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$campaignId = 50;
getCouponCampaign($campaignId);