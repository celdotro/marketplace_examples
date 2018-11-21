<?php
/**
 * [RO] Generare cupon (https://github.com/celdotro/marketplace/wiki/Genereaza-cupon)
 * [EN] Coupon generation (https://github.com/celdotro/marketplace/wiki/Generate-coupon)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Campaigns\CampaignsEdit;


#FUNCTION#
function generateCoupons($campaignId, $couponsNumber){
    $object = new CampaignsEdit();

    try{
        $response = $object->generateCoupons($campaignId, $couponsNumber);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$campaignId = 50;
$couponsNumber = 1;
generateCoupons($campaignId, $couponsNumber);