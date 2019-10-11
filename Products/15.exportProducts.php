<?php
/**
 * [RO] Exporta lista de produse in format xlsx (https://github.com/celdotro/marketplace/wiki/Export-produse)
 * [EN] Export products in xlsx format (https://github.com/celdotro/marketplace/wiki/Export-products)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Products\ProductsList;

#0#
#FUNCTION#
function exportProducts(){
    $object = new ProductsList();

    try{
        $response = $object->exportProducts();
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
exportProducts();