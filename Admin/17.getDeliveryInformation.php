<?php
/**
<<<<<<< HEAD
 * [RO] Preia informatiile despre taxele de livrare (https://github.com/celdotro/marketplace/wiki/Preia-informatii-despre-livrare)
 * [EN] Get information about delivery taxes (https://github.com/celdotro/marketplace/wiki/Get-delivery-information)
=======
 * [RO] Actualizeaza informatiil referitoare la taxele percepute pentru livrare
 * [EN] Updates information about delivery taxes
>>>>>>> 3e17ee91df37a5b5432d0e956b4642f00860ff62
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminInformation;

#FUNCTION#
function getDeliveryInformation(){
    $object = new AdminInformation();

    try{
        $response = $object->getDeliveryInformation();
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#

getDeliveryInformation();