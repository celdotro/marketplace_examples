<?php
/**
 * [RO] Listeaza toti curierii (https://github.com/celdotro/marketplace/wiki/Listeaza-curierii)
 * [EN] Lists all couriers (https://github.com/celdotro/marketplace/wiki/List-couriers)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminCouriers;

#0#
#FUNCTION#
function getCouriers(){
    $object = new AdminCouriers();

    try{
        $response = $object->getCouriers();
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}   

#EXAMPLE#
getCouriers();