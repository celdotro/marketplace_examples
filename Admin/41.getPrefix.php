<?php
/**
 * [RO] Preia prefixul pentru adaugarea de produse cu acelasi model, dar producator sau categorie diferite (https://github.com/celdotro/marketplace/wiki/Preluare-prefix)
 * [EN] Get the product adding prefix for cases with the same model but different manufacturer or category (https://github.com/celdotro/marketplace/wiki/Get-prefix)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminAccount;

#FUNCTION#
function getPrefix(){
    $object = new AdminAccount();

    try{
        $response = $object->getPrefix();
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
getPrefix();