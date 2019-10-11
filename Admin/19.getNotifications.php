<?php
/**
 * [RO] Preia notificarile aferente afiliatului (https://github.com/celdotro/marketplace/wiki/Preia-notificari)
 * [EN] Retrieves the notifications for the current affiliate (https://github.com/celdotro/marketplace/wiki/Get-notifications)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminAccount;

#FUNCTION#
function getNotifications(){
    $object = new AdminAccount();

    try{
        $response = $object->getNotifications();
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
getNotifications();