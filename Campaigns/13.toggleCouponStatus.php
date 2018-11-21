<?php
/**
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Campaigns\CampaignsEdit;


#FUNCTION#
function toggleCouponStatus($campaignId, $couponId, $status){
    $object = new CampaignsEdit();

    try{
        $response = $object->toggleCouponStatus($campaignId, $couponId, $status);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$campaignId = 50;
$couponId = 10708;
$status = 1;
toggleCouponStatus($campaignId, $couponId, $status);