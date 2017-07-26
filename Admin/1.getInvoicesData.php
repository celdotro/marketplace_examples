<?php
/**
 * [RO] Returneaza date despre platile efectuate catre afiliat pentru fiecare factura (https://github.com/celdotro/marketplace/wiki/Date-plati-facturi)
 * [EN] Returns data about the payments done in an affiliate's account for each invoice (https://github.com/celdotro/marketplace/wiki/Invoices-payment-data)
 */
include __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'api_include.php';

use celmarket\Auth;
Auth::setUserDetails('USERNAME', 'PASSWORD');

use celmarket\Admin\AdminPayments;

#0#
#FUNCTION#
function getInvoicesData($paymentStatus, $numInvoice = NULL, $startDate_inv = NULL, $endDate_inv = NULL, $numOrder = NULL, $startDate_order = NULL, $endDate_order = NULL, $page = NULL){
    $object = new AdminPayments();

    try{
        $response = $object->getInvoicesData($paymentStatus, $numInvoice, $startDate_inv, $endDate_inv, $numOrder, $startDate_order, $endDate_order, $page);
        print_r($response);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

#EXAMPLE#
$paymentStatus = 1; // OBLIGATORIU: Poate fi 1 - toate, 2 - neplatite sau 3 - platite / MANDATORY: Can have the values 1 - all, 2 - unpaid, 3 - paid

$numInvoice = 7; // OPTIONAL
$startDate_inv = '2017-01-01'; // OPTIONAL
$endDate_inv = '2017-12-31'; // OPTIONAL

$numOrder = 1; // OPTIONAL
$startDate_order = '2017-01-01'; // OPTIONAL
$endDate_order = '2017-12-31'; // OPTIONAL

$page = 1; // OPTIONAL

getInvoicesData($paymentStatus, $numInvoice, $startDate_inv, $endDate_inv, $numOrder, $startDate_order, $endDate_order, $page);