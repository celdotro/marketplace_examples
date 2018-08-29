<?php
/**
 * [RO] Preia o sinteza a informatiilor despre cont
 * [EN] Retrieve a summary of account information
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminInformation;

#FUNCTION#
function getInformationCombined($filters, $start){
    $object = new AdminInformation();

    try{
        $response = $object->getInformationCombined($filters, $start);
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
getInformationCombined($filters, $start);