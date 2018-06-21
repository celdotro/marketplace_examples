<?php
/**
 * [RO] Insereaza sau actualizeaza un produs. Poate primi o forma detaliata sau una scurta, cu toate acestea, pentru adaugarea unui produs nou poate fi folosita numai forma detaliata. (https://github.com/celdotro/marketplace/wiki/Import-produse)
 * [EN] Inserts or updates a product. Can receive a detailed list of data or a short list, but for inserting a new product the detailed list is necessary. (https://github.com/celdotro/marketplace/wiki/Import-products)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Products\ProductsInsert;

#16#
#FUNCTION#
function importProducts($products){
    $object = new ProductsInsert();

    try{
        $response = $object->importProducts($products);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$arrProducts = array(
    
    // Primul produs din lista -> forma detaliata (orice tip de produs)
    // First product -> detailed form (any type of product)
    array(
        'products_name' => 'Name1', // Obligatoriu pentru forma detailata / Mandatory for detailed form
        'products_model' => '2imagini6', // Obligatoriu pentru forma detailata / Mandatory for detailed form
        'manufacturers_name' => 'ManufacturerCompany', // Obligatoriu pentru forma detailata / Mandatory for detailed form
        'categories_id' => 48, // Obligatoriu pentru forma detailata / Mandatory for detailed form
        'stoc' => 1, // Obligatoriu pentru forma detailata / Mandatory for detailed form
        'pretf' => 200, // Obligatoriu pentru forma detailata / Mandatory for detailed form
        'products_image' => 'https://cdn.shopify.com/s/files/1/1007/9194/products/porcelain-happy-tux-penguin-figurine_1024x1024.jpg?v=1457205166', // Obligatoriu pentru forma detailata / Mandatory for detailed form
        
        'products_description' => 'Desc1',
        'moneda' => 'RON',
        'garantie' => 1,
        'garantie_pj' => 2,
        'products_url' => 'http://cel.ro',
        'image' => 
            array(
                array(
                    'id' => 0,
                    'url' => 'https://ih1.redbubble.net/image.112605481.9243/flat,750x1000,075,t.jpg'
                ), 
                array(
                    'id' => 0,
                    'url' => 'https://www.gnu.org/graphics/babies/BabyGnuTux-Small.png'
                )
            ),
        
        'charact' => array(
            'Tip tub:' => array(
                'val1_char1',
            ),
            'Rezolutie optima:' => array(
                'val2:'
            ),
            'Diagonala:' => array(
                'val2:'
            )
        ),
        'products_weight' => 15,
        'status' => 1,
        'import_code' => 2,
        'products_quantity' => 22,
        'adaos' => 15,
        'bonus' => array(
            'BonusModel1',
            'BonusModel2'
        ),
        'recomandate' => 2,
        'procesare_in' => 1,
        'cand' => '2017-04-03 09:00:00',
        'pret_vechi' => 100,
        'status' => 1,
        'hasTVA' => 1, // (Poate fi suprascris de cel de pe nivelul 0) Are valoarea 0 sau nu exista daca pretf NU include TVA si 1 daca include / (Can be overwritten by the attribute from level 0 with the same name) Has the value of 0 or it doesn't exist if pretf DOES NOT have the VAT included or 1 otherwise
        'type' => 'insert',
        'procesare_in' => 1
    ),

    // Al doilea produs din lista -> forma scurta (produse deja aprobate)
    // Second product -> short form (already approved products)
    //  array(
    //     'products_model' => 'schimbarestoc', // Obligatoriu pentru forma scurta / Mandatory for short form
    //     'pretlei' => 218.96, // Trebuie cel putin 1 camp dintre 'pretf' si 'stoc' / At least one field between 'pretf' and 'stoc' is necessary
    //     'stoc' => 38, // Trebuie cel putin 1 camp dintre 'pretf' si 'stoc' / At least one field between 'pretf' and 'stoc' is necessary
    //     'hasTVA' => 0, // (Poate fi suprascris de cel de pe nivelul 0) Are valoarea 0 sau nu exista daca pretf NU include TVA si 1 daca include / (Can be overwritten by the attribute from level 0 with the same name) Has the value of 0 or it doesn't exist if pretf DOES NOT have the VAT included or 1 otherwise
    //     'procesare_in' => 1,
    //     'type' => 'update',
    //     'status' => 0
    // ),

    // // [... N]      
    'hasTVA' => 0 // Camp optional care poate intra in conflict cu cel specificat la linia de produs. Verificati pagina de WIKI pentru mai multe informatii: https://github.com/celdotro/marketplace/wiki/Import-produse#parametri / Optional field that can conflict with the value specified in the product's line. Please check the WIKI page for more information: https://github.com/celdotro/marketplace/wiki/Import-products#parameters
);
importProducts($arrProducts);