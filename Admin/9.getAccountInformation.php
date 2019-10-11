<?php
/**
 * [RO] Preia o lista cu informatii generale ale contului de afiliat (https://github.com/celdotro/marketplace/wiki/Listeaza-informatiile-contului)
 * [EN] Retrieves a list of general account information (https://github.com/celdotro/marketplace/wiki/List-account-information)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminAccount;

#0#
#FUNCTION#
function getAccountInformation(){
    $object = new AdminAccount();

    try{
        $response = $object->getAccountInformation();
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
getAccountInformation();