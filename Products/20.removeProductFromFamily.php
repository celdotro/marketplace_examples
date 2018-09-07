<?php
/**
 * [RO] Elimina produs din familie (https://github.com/celdotro/marketplace/wiki/Elimina-produs-din-familie)
 * [EN] Remove product from family (https://github.com/celdotro/marketplace/wiki/Remove-product-from-family)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Products\ProductsUpdate;

#16#
#FUNCTION#
function removeProductFromFamily($model){
    $object = new ProductsUpdate();

    try{
        $response = $object->removeProductFromFamily($model);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$model = 'model';
removeProductFromFamily($model);