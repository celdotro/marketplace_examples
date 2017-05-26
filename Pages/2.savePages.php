<?php
include __DIR__ . '/../api_include.php';

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