<?php
/**
 * [RO] Returneaza datele aferente produselor al caror nume respecta un anumit tipar. Lista este limitata cu start si limit, dar contine si un camp cu numarul total de astfel de produse. (https://github.com/celdotro/marketplace/wiki/Listeaza-produse)
 * [EN] Returns product data for all products whose names are validated by a pattern. The returned list is limited by a start and a limit value, but includes the total number of products as a different field. (https://github.com/celdotro/marketplace/wiki/List-products)
 */
include __DIR__ . '/../api_include.php';

use celmarket\Auth;
Auth::setUserDetails('USERNAME', 'PASSWORD');

use celmarket\Products\ProductsList;

#12#
#FUNCTION#
function listProducts($start, $limit, $search = null){
    $object = new ProductsList();

    try{
        $response = $object->listProducts($start, $limit, $search);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
listProducts(0, 5, 'word1 word2');