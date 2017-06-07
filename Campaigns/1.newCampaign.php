<?php
/**
 * [RO] Adauga o campanie noua
 * [EN] Adds a new campaign
 */
include __DIR__ . '/../api_include.php';

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