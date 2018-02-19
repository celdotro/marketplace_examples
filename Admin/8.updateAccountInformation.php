<?php
/**
 * [RO] Actualizeaza urmatoarele date aferente afiliatului: CIF, IBAN, numar de telefon, parola, denumirea bancii, denumire completa, adresa sediu, api link si scurta descriere (https://github.com/celdotro/marketplace/wiki/Actualizare-informatii-cont)
 * [EN] Updates the following data of an affiliate: CIF, IBAN, phone number, password, bank's name, full name, headquarter's address, api link, and short description (https://github.com/celdotro/marketplace/wiki/Actualizare-informatii-cont)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';




use celmarket\Admin\AdminAccount;


#FUNCTION#
function updateAccountInformation($cif = NULL, $iban = NULL, $telephone = NULL, $password = NULL, $bank = NULL, $fullName = NULL, $hqAddress = NULL, $description = NULL, $apiLink = NULL){
    $object = new AdminAccount();

    try{
        $response = $object->updateAccountInformation($cif, $iban, $telephone, $password, $bank, $fullName, $hqAddress, $description, $apiLink);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$cif = 'RO123456';
$iban = 'ROXXXXXX';
$telephone = '+40799999999';
$password = 'password';
$bank = 'BANK_NAME';
$fullName = 'SC Company SA';
$hqAddress = 'Headquaters Address';
$description = 'Short description';
$apiLink = 'http://example.com/api.php?alert_type=$1$&alert_value=$2$&other_parameters=$3$';

updateAccountInformation($cif, $iban, $telephone, $password, $bank, $fullName, $hqAddress, $description, $apiLink);