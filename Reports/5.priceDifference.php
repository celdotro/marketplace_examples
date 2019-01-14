<?php
/**
 * [RO] Diferente de pret fata de site-uri externe (https://github.com/celdotro/marketplace/wiki/Diferenta-pret)
 * [EN] Price difference for external sites (https://github.com/celdotro/marketplace/wiki/Price-difference)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Reports\FinancialReports;

#16#
#FUNCTION#
function priceDiff(){
    $object = new FinancialReports();

    try{
        $response = $object->priceDiff();
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
priceDiff();