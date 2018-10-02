<?php
/**
 * [RO]
 * Folositi composer pentru a instala dependetele:
 *      - rulati urmatoarea comanda in directorul principal (directorul in care acest fisier este localizat): composer install
 * WIKI : https://github.com/celdotro/marketplace/wiki/Prima-pagina
 *
 * [EN]
 * Use composer to install dependencies:
 *      - issue this command in the main folder (the folder in which this file is located): composer install
 * WIKI : https://github.com/celdotro/marketplace/wiki/First-page
 */

// Include vendor
// include 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
include __DIR__ . '/../marketplace/index.php';

// Optional - set link to demo server
// celmarket\Config::setDemo();

// Authenticate - change USERNAME and PASSWORD with your credentials
use celmarket\Auth;
Auth::setUserDetails('flo2', '0OZ1LEQC0QShKn24uM3KYrVYvdm9ZktPo2EDpke30hE3xsDFmm');
// Auth::setUserDetails('testdoi', '1Pass__)');
// Auth::setUserDetails('unfurnizor', '0OZ1LEQC0QShKn24uM3KYrVYvdm9ZktPo2EDpke30hE3xsDFmm');
// Auth::setUserDetails('nichiduta', '0OZ1LEQC0QShKn24uM3KYrVYvdm9ZktPo2EDpke30hE3xsDFmm');
// Auth::setUserDetails('alecoair', 'test');
// Auth::setUserDetails('itelgsm', 'mbPeLK7wx5');

// Auth::setUserDetails('neoallbet', '0OZ1LEQC0QShKn24uM3KYrVYvdm9ZktPo2EDpke30hE3xsDFmm');