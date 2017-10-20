<?php
/**
 * [RO] Actualizeaza SN-ul unui produs comandat (https://github.com/celdotro/marketplace/wiki/Actualizare-SN)
 * [EN] Updates an ordered product's SN (https://github.com/celdotro/marketplace/wiki/Update-SN)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Orders\OrdersData;

#15#
#FUNCTION#
function updatesn($id_disp_fact, $products){
    $object = new OrdersData();

    try{
        $response = $object->updatesn($id_disp_fact, $products);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$id_disp_fact = 123456;
$products  = array(array('model' => 'Model1', 'sn' => 'SN1'));
updatesn($id_disp_fact, $products);