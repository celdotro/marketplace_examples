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
        'products_name' => 'Husa Slim Nillkin Frosted Samsung J7 Max Negru', // Obligatoriu pentru forma detailata / Mandatory for detailed form
        'products_model' => 'CEL3555', // Obligatoriu pentru forma detailata / Mandatory for detailed form
        'manufacturers_name' => 'Nillkin', // Obligatoriu pentru forma detailata / Mandatory for detailed form
        'categories_id' => 441, // Obligatoriu pentru forma detailata / Mandatory for detailed form
        'stoc' => 9, // Obligatoriu pentru forma detailata / Mandatory for detailed form
        'pretf' => 25.0713, // Obligatoriu pentru forma detailata / Mandatory for detailed form
        'products_image' => "https://dev.itelmobile.ro/10953/husa-slim-nillkin-frosted-samsung-j7-max-negru.jpg", // Obligatoriu pentru forma detailata / Mandatory for detailed form
        
        'products_description' => '<p class=\"page-title\">Husa slim Nillkin Frosted Samsung J7 Max Negru<\/p>\n<p class=\"page-title\"><\/p>\n<p dir=\"ltr\" id=\"docs-internal-guid-c8104134-7b3d-cafb-73d5-4b1811b9ba96\"><span>Husa slim hard din policarbonat tare <\/span><\/p>\n<p dir=\"ltr\"><span>Ultra slim, nu ingroasa telefonul, acopera spatele si lateralele <\/span><\/p>\n<p dir=\"ltr\"><span>Este confectionata dintr-un policarbonat (plastic) de buna calitate, care rezista foarte bine la socuri si protejeaza telefonul .<\/span><\/p>\n<p dir=\"ltr\"><span>Prezinta grip anti-alunecare pe spate pentru o buna prindere in mana <\/span><\/p>\n<p dir=\"ltr\"><span>Ofera un aspect placut telefonului<\/span><\/p>\n<p dir=\"ltr\"><span>Protejeaza telefonul importiva socurilor si a zgarieturilor <\/span><\/p>\n<p dir=\"ltr\"><span>Husa este perfect realizata pentru a se potrivi device-ului din descriere <\/span><\/p>\n<p dir=\"ltr\"><span>Permite aceesul la porturile de incarcare si butoane foarte usor datorita decupajelor perfect Realizate pentru modelul acesta de telefon <\/span><\/p>\n<p dir=\"ltr\"><span>Este confectionata dintr-un material de inalta calitate <\/span><\/p>\n<p dir=\"ltr\"><span>Design ergonimic si premium<\/span><\/p>',
        'moneda' => 'RON',
        'garantie' => 1,
        'garantie_pj' => 1,
        'products_url' => 'https://dev.itelmobile.ro/husa-slim-nillkin-frosted-samsung-j7-max-negru/',
        'image' => 
            array(
               
                array(
                    'id' => 0,
                    'url' => 'https://dev.itelmobile.ro/10954/husa-slim-nillkin-frosted-samsung-j7-max-negru.jpg'
                ),
                array(
                    'id' => 0,
                    'url' => 'https://dev.itelmobile.ro/10955/husa-slim-nillkin-frosted-samsung-j7-max-negru.jpg'
                ),
            ),
        // "image"=> array(
        //     "https://dev.itelmobile.ro/10954/husa-slim-nillkin-frosted-samsung-j7-max-negru.jpg",
        //     "https://dev.itelmobile.ro/10955/husa-slim-nillkin-frosted-samsung-j7-max-negru.jpg"
        // ),
        'charact' => array(
            'Compatibilitate:' => array(
                'Samsung',
            ),
            'Tip:' => array(
                'Carcasa'
            ),
            'Material:' => array(
                'Policarbonat:'
            ),
            'Modele Compatibile:' => array(
                'Samsung J7 Max:'
            ),
        ),
        'products_weight' => 16,
        // 'status' => 1,
        'import_code' => 'hus-nlk-frosted-j7max-neg',
        'products_quantity' => 9,
        'adaos' => 5.0000,
        // 'bonus' => array(
        //     'BonusModel1',
        //     'BonusModel2'
        // ),
        // 'recomandate' => 2,
        'procesare_in' => 1,
        'cand' => '2018-06-22 15:28',
        'pret_vechi' => 28.17,
        'status' => 1,
        'hasTVA' => 1, // (Poate fi suprascris de cel de pe nivelul 0) Are valoarea 0 sau nu exista daca pretf NU include TVA si 1 daca include / (Can be overwritten by the attribute from level 0 with the same name) Has the value of 0 or it doesn't exist if pretf DOES NOT have the VAT included or 1 otherwise
        'type' => 'insert',
        // 'procesare_in' => 1
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