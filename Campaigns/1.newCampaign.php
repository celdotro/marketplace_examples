<?php
/**
 * [RO] Adauga o campanie noua (https://github.com/celdotro/marketplace/wiki/Adaugare-campanie)
 * [EN] Adds a new campaign (https://github.com/celdotro/marketplace/wiki/Add-Campaign)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';

use celmarket\Auth;
Auth::setUserDetails('USERNAME', 'PASSWORD');

use celmarket\Campaigns\CampaignsCreate;

#23#
#FUNCTION#
function newCampaign($name, $dateStart, $dateEnd){
    $object = new CampaignsCreate();

    try{
        $response = $object->newCampaign($name, $dateStart, $dateEnd);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
newCampaign('Campanie Test', '2017-01-01', '2017-05-09');