<?php
/**
 * [RO] Preia date cupon (https://github.com/celdotro/marketplace/wiki/Date-cupon)
 * [EN] Get coupon data (https://github.com/celdotro/marketplace/wiki/Coupon-data)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Campaigns\CampaignsInfo;


#FUNCTION#
function getCouponData($couponId){
    $object = new CampaignsInfo();

    try{
        $response = $object->getCouponData($couponId);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$couponId = 10708;
getCouponData($couponId);