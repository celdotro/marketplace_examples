<?php
/**
 * [RO] Verifica paginile obligatorii (https://github.com/celdotro/marketplace/wiki/Verifica-pagini-obligatorii)
 * [EN] Checks the mandatory pages (https://github.com/celdotro/marketplace/wiki/Check-mandatory-pages)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminAccount;

#FUNCTION#
function checkMandatoryInfo(){
    $object = new AdminAccount();

    try{
        $response = $object->checkMandatoryInfo();
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
checkMandatoryInfo();