<?php
/**
 * [RO] Adauga un cont de curier nou (https://github.com/celdotro/marketplace/wiki/Adauga-cont-de-curier)
 * [EN] Adds a new courier account (https://github.com/celdotro/marketplace/wiki/Add-courier-account)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminCouriers;

#0#
#FUNCTION#
function addAccount($params = array()){
    $object = new AdminCouriers();

    try{
        $response = $object->addAccount($params);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$params = array(
    'courier_id'    => 1,
    'name'          => 'Contul X',
    'awb_format'    => 'A4'
);

addAccount($params);