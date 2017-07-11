<?php
/**
 * [RO] Returneaza date despre istoricul importurilor (https://github.com/celdotro/marketplace/wiki/Istoric-importuri)
 * [EN] Returns data about import history (https://github.com/celdotro/marketplace/wiki/Import-history)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';

use celmarket\Auth;
Auth::setUserDetails('USERNAME', 'PASSWORD');

use celmarket\Admin\History;

#0#
#FUNCTION#
function getImportHistory($date_start = null, $date_stop = null, $import_type = null, $page = 0){
    $object = new History();

    try{
        $response = $object->getImportHistory($date_start, $date_stop, $import_type, $page);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}   

#EXAMPLE#
$date_start = '2017-01-01';
$date_stop = '2017-12-31';
$import_type = 1;
$page = 0;

getImportHistory($date_start, $date_stop, $import_type, $page);