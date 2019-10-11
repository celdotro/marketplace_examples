<?php
/**
 * [RO] Marcheaza toate mesajele ca fiind citite (https://github.com/celdotro/marketplace/wiki/Marcheaza-toate-ca-fiind-citite)
 * [EN] Marks all notifications as read (https://github.com/celdotro/marketplace/wiki/Mark-all-as-read)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminAccount;

#FUNCTION#
function markAllAsSeen(){
    $object = new AdminAccount();

    try{
        $response = $object->markAllAsSeen();
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
markAllAsSeen();