<?php
/**
 * [RO] Marcheaza o notificare drept citita (https://github.com/celdotro/marketplace/wiki/Marcheaza-drept-citita)
 * [EN] Marks a notification as seen (https://github.com/celdotro/marketplace/wiki/Mark-as-seen)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminAccount;

#FUNCTION#
function markAsSeen($id){
    $object = new AdminAccount();

    try{
        $response = $object->markAsSeen($id);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$id = 1;
markAsSeen($id);