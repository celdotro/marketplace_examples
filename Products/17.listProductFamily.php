<?php
/**
 * [RO] Listeaza familiile de produse (https://github.com/celdotro/marketplace/wiki/Listeaza-familiile-de-produse)
 * [EN] List product families (https://github.com/celdotro/marketplace/wiki/List-product-families)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Products\ProductsList;

#16#
#FUNCTION#
function getProductsFamilies($start, $limit, $search){
    $object = new ProductsList();

    try{
        $response = $object->getProductsFamilies($start, $limit, $search);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$start = 0;
$limit = 10;
$search = '';

getProductsFamilies($start, $limit, $search);