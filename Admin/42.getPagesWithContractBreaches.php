<?php
/**
 * [RO] Listeaza paginile cu incalcari ale contractului (https://github.com/celdotro/marketplace/wiki/Listare-pagini-cu-incalcari-de-contract)
 * [EN] List pages that breach the contract (https://github.com/celdotro/marketplace/wiki/List-pages-that-breach-the-contract)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminAccount;

#FUNCTION#
function getPagesWithContractBreaches(){
    $object = new AdminAccount();

    try{
        $response = $object->getPagesWithContractBreaches();
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
getPagesWithContractBreaches();