<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);
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
include 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

// require __DIR__.'/AuthProviderMySQL.php';
require __DIR__.'/AuthProviderMemcached.php';

// Optional - set link to demo server
// celmarket\Config::setDemo();

// Authenticate - change USERNAME and PASSWORD with your credentials
use celmarket\Auth;
// use celmarket\AuthProviderMySQL;
use celmarket\AuthProviderMemcached;

// AuthProviderMemcached::setProviderID('test');
Auth::setUserDetails('test', '0OZ1LEQC0QShKn24uM3KYrVYvdm9ZktPo2EDpke30hE3xsDFmm', AuthProviderMemcached::class);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);