<?php
/**
 * [RO] Listeaza produsele facturabile (https://github.com/celdotro/marketplace/wiki/Listeaza-produsele-facturabile)
 * [EN] List all products that can be billed (https://github.com/celdotro/marketplace/wiki/List-billable-products)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminReports;

#0#
#FUNCTION#
function getBillableProducts(){
    $object = new AdminReports();

    try{
        $response = $object->getBillableProducts();
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
getBillableProducts();