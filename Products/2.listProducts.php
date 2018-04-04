<?php
/**
 * [RO] Returneaza datele aferente produselor al caror nume respecta un anumit tipar. Lista este limitata cu start si limit, dar contine si un camp cu numarul total de astfel de produse. (https://github.com/celdotro/marketplace/wiki/Listeaza-produse)
 * [EN] Returns product data for all products whose names are validated by a pattern. The returned list is limited by a start and a limit value, but includes the total number of products as a different field. (https://github.com/celdotro/marketplace/wiki/List-products)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Products\ProductsList;

#12#
#FUNCTION#
function listProducts($start, $limit, $search = null, $forceCount = false, $filters = null, $includeTransport = null){
    $object = new ProductsList();

    try{
        $response = $object->listProducts($start, $limit, $search, $forceCount, $filters, $includeTransport);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
listProducts(0, 5, 'word1 word2', true, json_encode(
    array(
        'keyword' => 'word1 word2',
        'manufacturer' => array('Manufacturer'),
        'status' => array(0,1),
        'categories_id' => array(100),
        'products_last_modified_min' => '2017-01-01',
        'products_last_modified_max' => date('Y-m-d H:i:s'),
        'products_date_added_min' => '2017-01-01',
        'products_date_added_max' => date('Y-m-d H:i:s'),
        'products_model' => array('model1', 'model2'),
    ),
    false
));