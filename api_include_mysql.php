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
include 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

require __DIR__.'/AuthProviderMySQL.php';

// Optional - set link to demo server
celmarket\Config::setDemo();

// Authenticate - change USERNAME and PASSWORD with your credentials
use celmarket\Auth;
use celmarket\AuthProviderMySQL;

//Optional providerid for account distinction. If not set it will use md5(userpass)
AuthProviderMySQL::setProviderID('ID_AFILIAT');
Auth::setUserDetails('USER', 'PASSWORD', AuthProviderMySQL::class);