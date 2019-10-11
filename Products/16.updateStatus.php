<?php
/**
 * [RO] Actualizeaza statusul unui produs (https://github.com/celdotro/marketplace/wiki/Actualizare-status-produs)
 * [EN] Update product's status (https://github.com/celdotro/marketplace/wiki/Update-product-status)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Products\ProductsUpdate;

#16#
#FUNCTION#
function updateStatus($model, $status){
    $object = new ProductsUpdate();

    try{
        $response = $object->updateStatus($model, $status);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$model = 'Model1';
$status = 1;
updateStatus($model, $status);