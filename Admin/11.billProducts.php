<?php
/**
 * [RO] Factureaza produsele disponibile (https://github.com/celdotro/marketplace/wiki/Factureaza-produse)
 * [EN] Bills available products (https://github.com/celdotro/marketplace/wiki/Bill-products)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminReports;

#0#
#FUNCTION#
function billProducts($products){
    $object = new AdminReports();

    try{
        $response = $object->billProducts($products);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$products = array(
    array(
        'products_model' => 'Model1',
        'pv' => 100,
        'pi' => 70,
        'cantitate' => 2,
        'sr' => 'TEST',
        'nr' => 1
    ),
    array(
        'products_model' => 'Model2',
        'pv' => 200,
        'pi' => 180,
        'cantitate' => 1,
        'sr' => 'TEST',
        'nr' => 2
    )
);
billProducts($products);