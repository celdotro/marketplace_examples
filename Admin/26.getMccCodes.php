<?php
/**
 * [RO] Preia toate codurile MCC (https://github.com/celdotro/marketplace/wiki/Preia-coduri-MCC)
 * [EN] Get all MCC Codes (https://github.com/celdotro/marketplace/wiki/Get-MCC-Codes)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminInformation;

#FUNCTION#
function getMccCodes($filters, $start){
    $object = new AdminInformation();

    try{
        $response = $object->getMccCodes($filters, $start);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$filters = array(
    // 'mcc' => '0742',
    // 'descriere' => 'vet',
    'descriere_romana' => 'vet'
);
$start = 0;
getMccCodes($filters, $start);