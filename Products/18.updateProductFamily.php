<?php
/**
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Products\ProductsUpdate;

#16#
#FUNCTION#
function updateProductFamily($family_id, $family_name, $characteristics){
    $object = new ProductsUpdate();

    try{
        $response = $object->updateProductFamily($family_id, $family_name, $characteristics);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$family_id = 12234;
$family_name = 'Huse tablete';
$characteristics = array(
    'mode' => 1,
    'charact' => array(
        644,
        634
    )
);
updateProductFamily($family_id, $family_name, $characteristics);