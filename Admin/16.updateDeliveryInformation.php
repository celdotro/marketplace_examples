<?php
/**
 * [RO] Actualizeaza informatiil referitoare la taxele percepute pentru livrare
 * [EN] Updates information about delivery taxes
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminInformation;

#FUNCTION#
function updateDeliveryInformation($minimTara = null, $minimBucuresti = null, $kgIncluse = null, $pretKgInPlus = null, $deschidereColet = null){
    $object = new AdminInformation();

    try{
        $response = $object->updateDeliveryInformation($minimTara, $minimBucuresti, $kgIncluse, $pretKgInPlus, $deschidereColet);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$minimTara = 100;
$minimBucuresti = 100;
$kgIncluse = 5;
$pretKgInPlus = 2;
$deschidereColet = 5;
updateDeliveryInformation($minimTara, $minimBucuresti, $kgIncluse, $pretKgInPlus, $deschidereColet);