<?php
/**
<<<<<<< HEAD
 * [RO] Actualizeaza informatiile referitoare la taxele percepute pentru livrare (https://github.com/celdotro/marketplace/wiki/Actualizeaza-informatiile-livrarii)
 * [EN] Updates information about delivery taxes (https://github.com/celdotro/marketplace/wiki/Update-delivery-information)
=======
 * [RO] Actualizeaza informatiil referitoare la taxele percepute pentru livrare
 * [EN] Updates information about delivery taxes
>>>>>>> 3e17ee91df37a5b5432d0e956b4642f00860ff62
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