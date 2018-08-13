<?php
/**
 * [RO] Preia lista ceririlor de acces la categorii (https://github.com/celdotro/marketplace/wiki/Preia-cererile-de-acces-la--categorii)
 * [EN] Retrieve category access request list (https://github.com/celdotro/marketplace/wiki/Retrieve-access-requests)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminInformation;

#FUNCTION#
function listCategoryRequests($availability){
    $object = new AdminInformation();

    try{
        $response = $object->listCategoryRequests($availability);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$availability = 2;
listCategoryRequests($availability);