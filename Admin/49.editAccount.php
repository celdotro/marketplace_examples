<?php
/**
 * [RO] Editeaza un cont de curier (https://github.com/celdotro/marketplace/wiki/Editare-cont-curier)
 * [EN] Edit a courier account (https://github.com/celdotro/marketplace/wiki/Edit-courier-account)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminCouriers;

#0#
#FUNCTION#
function editAccount($id, $params = array()){
    $object = new AdminCouriers();

    try{
        $response = $object->editAccount($id, $params);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$id = 123;
$params = array(
    'courier_id'    => 1,
    'name'          => 'Contul X',
    'awb_format'    => 'A4'
);

editAccount($id, $params);