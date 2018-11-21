<?php
/**
 * [RO] Verifica utilizarea cuponului (https://github.com/celdotro/marketplace/wiki/Verifica-utilizarea-cuponului)
 * [EN] Check coupon's usage (https://github.com/celdotro/marketplace/wiki/Check-coupon-usage)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Campaigns\CampaignsInfo;


#FUNCTION#
function checkCouponUsage($campaignId, $couponId){
    $object = new CampaignsInfo();

    try{
        $response = $object->checkCouponUsage($campaignId, $couponId);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$campaignId = 50;
$couponId = 10708;
checkCouponUsage($campaignId, $couponId);