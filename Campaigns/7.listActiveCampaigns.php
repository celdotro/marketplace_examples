<?php
/**
 * [RO] Listeaza campaniile active. Datele pot fi filtrate in functie de data de inceput, data de sfarsit si numele campaniei. (https://github.com/celdotro/marketplace/wiki/Listare-campanii-active)
 * [EN] Lists all active campaigns. Data can be filtered by start date, end date, and campaign name. (https://github.com/celdotro/marketplace/wiki/List-Active-Campaigns)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Campaigns\CampaignsInfo;

#23#
#FUNCTION#
function listActiveCampaigns($start, $limit, $dateFrom = NULL, $dateTo = NULL, $search = NULL){
    $object = new CampaignsInfo();

    try{
        $response = $object->listActiveCampaigns($start, $limit, $dateFrom, $dateTo, $search);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$start = 0;
$limit = 10;
$dateFrom = '2017-01-01';
$dateTo = '2017-06-01';
$search = 'Test';
listActiveCampaigns($start, $limit, $dateFrom, $dateTo, $search);