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
    array(
        'products_name' => 'Birou Calculator Global Network Fag', // Obligatoriu pentru forma detailata / Mandatory for detailed form
        'products_model' => '16101', // Obligatoriu pentru forma detailata / Mandatory for detailed form
        'manufacturers_name' => 'Drimus', // Obligatoriu pentru forma detailata / Mandatory for detailed form
        'categories_id' => 1270, // Obligatoriu pentru forma detailata / Mandatory for detailed form
        'stoc' => 13, // Obligatoriu pentru forma detailata / Mandatory for detailed form
        'pretf' => 264.0000, // Obligatoriu pentru forma detailata / Mandatory for detailed form
        'products_image' => "http://markemag.totulpentrubebe.ro/6322-thickbox_default/2707.jpg", // Obligatoriu pentru forma detailata / Mandatory for detailed form
        'products_description' => 'Birou calculator este in ziua de astazi o piesa de mobilier prezenta in toate spatiile office si in aproape toate spatiile de locuit. Este clar ca biroul trebuie sa fie unul functional si foarte rezistent, el trebuie sa raspunda tuturor cerintelor tale atunci cand petreci mult timp in fata calculatorului si sa faca fata tuturor pericolelor de zi cu zi (cafea, ceai, sucuri, zgarieturi, lovituri).

        Biroul pentru calculator este unul rezistent, simplu, realizat din PAL melaminat cu grosimea de 18 mm. Datorita dimensiunilor sale nu foarte mari, el este alegerea ideala atunci cand nu dispui de prea mult spatiu in camera in care vrei sa-l pozitionezi.
        
        Biroul este unul foarte practic – el este prevazut cu polita glisanta pentru tastatura, dar si cu loc pentru unitate. De asemenea, deasupra spatiului pentru unitate, biroul mai dispune si de o polita pentru depozitarea diverselor lucruri necesare muncii la birou.
        
        Biroul se livreaza la colet. El este usor de montat si foarte usor de manevrat.
        
        Dimensiunile biroului pentru calculator sunt:
        Lungime blat – 100 cm   
        Latime blat – 52 cm
        Inaltime – 76 cm
        
        Garantia produsului este de 2 ani.
        ',
        'products_url' => 'http://markemag.totulpentrubebe.ro/1610-2707.htm',
        'image' => 
            array(
               
                array(
                    'id' => 0,
                    'url' => 'http://markemag.totulpentrubebe.ro/6321-thickbox_default/2707.jpg'
                ),
                array(
                    'id' => 0,
                    'url' => 'http://markemag.totulpentrubebe.ro/6322-thickbox_default/2707.jpgg'
                ),
                array(
                    'id' => 0,
                    'url' => 'http://markemag.totulpentrubebe.ro/6323-thickbox_default/2707.jpg'
                ),
            ),
        'charact' => array(
            'culoare:' => array(
                'Fag',
            ),
            'Material:' => array(
                'Pal',
            ),
            'Dimensiune:' => array(
                '100 cm'
            ),
            'Tip:' => array(
                'Birou'
            ),
            'Format:' => array(
                'Standard'
            ),

        ),
        'products_weight' => 26.0000,
        'status' => 1,
        'type' => 'insert',
    ),
);
importProducts($arrProducts);