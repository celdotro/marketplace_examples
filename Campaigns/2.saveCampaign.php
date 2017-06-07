<?php
/**
 * [RO] Actualizeaza detaliile unei campanii
 * [EN] Updates campaign details
 */
include __DIR__ . '/../api_include.php';

use celmarket\Auth;
Auth::setUserDetails('USERNAME', 'PASSWORD');

use celmarket\Campaigns\CampaignsEdit;

#23#
#FUNCTION#
function saveCampaign($name, $newName, $dateStart, $dateEnd, $discount){
    $object = new CampaignsEdit();

    try{
        $response = $object->saveCampaign($name, $newName, $dateStart, $dateEnd, $discount);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
saveCampaign('Campanie Test', 'Campanie Test!!!', '2017-01-01', '2017-05-09', 10);