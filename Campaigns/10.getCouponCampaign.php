<?php
/**
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
$campaignId = 1;
getCouponCampaign($campaignId);