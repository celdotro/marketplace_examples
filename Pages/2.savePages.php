<?php
/**
 * [RO] Creaza o pagina noua folosind datele trimise ca parametru
 * [EN] Creates a new page using the data specified as a parameter
 */
include __DIR__ . '/../api_include.php';

use celmarket\Auth;
Auth::setUserDetails('USERNAME', 'PASSWORD');

use celmarket\Pages\PagesImport;

#21#
#FUNCTION#
function savePage($id, $pageData){
    $object = new PagesImport();

    try{
        $response = $object->savePage($id, $pageData);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$id = 28;
$pageData = array(
    'pkey'  =>  'aPkey',
    'ctnp'  =>  'aContinut pagina',
    'pg_n'  =>  'aNumar pagina'
);
savePage($id, $pageData);