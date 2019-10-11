<?php
/**
 * [RO] Actualizeaza promotia unui produs (https://github.com/celdotro/marketplace/wiki/Actualizare-promotie-produs)
 * [EN] Update product's promotion (https://github.com/celdotro/marketplace/wiki/Update-product-promotion)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Products\ProductsUpdate;

#16#
#FUNCTION#
function updatePromotion($model, $promotion){
    $object = new ProductsUpdate();

    try{
        $response = $object->updatePromotion($model, $promotion);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$model = 'bb87069sw';
$promotion = 1;
updatePromotion($model, $promotion);