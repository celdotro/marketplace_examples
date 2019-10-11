<?php
/**
 * [RO] Adaugare campanie cupoane noua (https://github.com/celdotro/marketplace/wiki/Adaugare-Campanie-Cupoane-Noua)
 * [EN] Add new coupon campaign (https://github.com/celdotro/marketplace/wiki/Add-New-Coupon-Campaign)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Campaigns\CampaignsCreate;


#FUNCTION#
function saveCouponsCampaign($name, $description, $discountType, $value, $minOrder, $totalUtilize, $userUtilize, $dateStart, $dateEnd, $domainRestriction, $productRestrictions){
    $object = new CampaignsCreate();

    try{
        $response = $object->saveCouponsCampaign($name, $description, $discountType, $value, $minOrder, $totalUtilize, $userUtilize, $dateStart, $dateEnd, $domainRestriction, $productRestrictions);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$name = 'TestApi';
$description = 'DescriptionAPI';
$discountType = 'F';
$value = 5;
$minOrder = 1;
$totalUtilize = 1;
$userUtilize = 1;
$dateStart = '2018-11-01';
$dateEnd = '2018-12-01';
$domainRestriction = '';
$productRestrictions = array();
saveCouponsCampaign($name, $description, $discountType, $value, $minOrder, $totalUtilize, $userUtilize, $dateStart, $dateEnd, $domainRestriction, $productRestrictions);