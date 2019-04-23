<?php
require_once 'api_include.php';

$datacel = array(
    'orders_products_id' => 4016301,
    'status' => 5
);



// $base ='https://api-mp.cel.ro/market_api/';
$base ='http://192.168.0.85/market_api/';
$url = $base.'orders/changeOrderProductStatus';
$client = new \GuzzleHttp\Client();

// $token = 'VlhPQVUrcVFHdXRJVU5TSTdPN0p5aCt6d2M3bnBZdXJCck5mOEs2TDcyM0dNTnY2RTd1SkxoNllpOEE3bFZ3UHRGOEhYODhNZE9FMHVLc1o1b05CUnM0MlUzRmhPb0VBT3dJL21IZ2NTSTI4T000V2I2LzBpRU51MGlsVWVJYUIxbEh0MFRyaE8xNWcrdHB0d2tBSnBpOTBsbGw5YS9Fc2ZrN0owOGZOdlNwcEhsWThGSERTUVJlTllhVkQ2S0gzbTVYVGVja0p2RVBsT2U4NHRwZHFtUT09';
$token = 'AIS9IhxOgsANkZLAQhgQRGiCqNvr/C+SQGtzqvFaGQZL8OgXe/caxzPXVG3CPXLMhs44jg59a2N8nXg22OgaxBw46CQdr53VHatUOPmbccDs6zE8PAZMQStJmo7UpGpcldVzNovt2GSq3cWP56j4aMYYndnzKaZYAZ2gl1vDsLarP9h9NHfIb37OAny3IdB1bUt2KvOQ3qUDjBp8BPTcQ7nZVqofElSedKutllN1iEYq1gyVyrTdxXmCF69Sa6+UWYJJFyDZ:AAJriMu0jCES9xA4La9rzbjhWhVKQjde53L7RVBZDYc3G+iPruqaLSmrZPd134MOhdxEEb2B2ObappN8ZVuBRvGRSJzfHwRNwjqp0cUKoU7zhe6ZzlRkgyMwNlDyn6UgAS+0CtUsm+0nwMBMTMfmPFwCfN6XzZq0esW7BjaLwiEojfeGW2Il+j/J2+FDfH/pW54ApVMbkwojs/Q18Q7nDYfsanbTHmgv0Cr1hBULp34VauuRVTYKK7wqIZjmrqe5nYgL/P9S';
$data[ 'api_version'] ='1.18.2';

$response = $client->request(
    'POST',
    $url,
    array(
        'form_params' => $datacel ,
        'headers' => array('AUTH' => 'Bearer ' . $token)
    )
);

echo '<pre>';
print_r($response->getBody()->getContents());
echo '</pre>';
die();
// echo '<pre>';
// print_r($data);
// echo '<pre/>';
// $response = json_decode($response->getBody(),1); // Works fine, I do receive an access token.
// echo '<pre>';
// print_r($response);
// echo '<pre/>';