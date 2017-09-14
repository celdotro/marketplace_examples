<?php
/**
 * [RO] Actualizeaza detaliile unei campanii (https://github.com/celdotro/marketplace/wiki/Salvare-campanie)
 * [EN] Updates campaign details (https://github.com/celdotro/marketplace/wiki/Save-Campaign)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




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