<?php
/**
 * [RO] Actualizeaza urmatoarele date aferente afiliatului: CIF, IBAN, numar de telefon, parola, denumirea bancii, denumire completa, adresa sediu, api link si scurta descriere (https://github.com/celdotro/marketplace/wiki/Actualizare-informatii-cont)
 * [EN] Updates the following data of an affiliate: CIF, IBAN, phone number, password, bank's name, full name, headquarter's address, api link, and short description (https://github.com/celdotro/marketplace/wiki/Actualizare-informatii-cont)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminAccount;


#FUNCTION#
function updateAccountInformation($cif = NULL, $iban = NULL, $telephone = NULL, $password = NULL, $bank = NULL, $fullName = NULL, $hqAddress = NULL, $description = NULL, $apiLink = NULL, $contactPerson, $county, $city, $reg){
    $object = new AdminAccount();

    try{
        $response = $object->updateAccountInformation($cif, $iban, $telephone, $password, $bank, $fullName, $hqAddress, $description, $apiLink, $contactPerson, $county, $city, $reg);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$cif = '6859662';
$iban = 'RO35RNCB0205044180940001';
$telephone = '+40799999999';
$password = '1Pass__)';
$bank = 'BANK_NAME';
$fullName = 'SC Company SA';
$hqAddress = 'Headquaters Address';
$description = 'Short description';
$apiLink = 'http://example.com/api.php?alert_type=$1$&alert_value=$2$&other_parameters=$3$';
$contactPerson = 'Ionescu';
$county = 'Judet';
$city = 'Localitate';
$reg = array(
    'j1' => 'J',
    'j2' => '05',
    'j3' => 'ABCD',
    'j4' => '2018'
);

updateAccountInformation($cif, $iban, $telephone, $password, $bank, $fullName, $hqAddress, $description, $apiLink, $contactPerson, $county, $city, $reg);