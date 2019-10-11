<?php
/**
 * [RO] Preia diverse date despre afiliatul curent (https://github.com/celdotro/marketplace/wiki/Preia-date-despre-afiliat)
 * [EN] Retrieves miscellaneous data about an affiliate (https://github.com/celdotro/marketplace/wiki/Get-affiliate-data)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminAccount;

#FUNCTION#
function getAffiliateData(){
    $object = new AdminAccount();

    try{
        $response = $object->getAffiliateData();
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
getAffiliateData();