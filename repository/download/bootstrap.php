<?php
/**
 * File bootstrap digunakan untuk memuat paket
 * yang telah terinstall.
 *
 * @author Ayus Irfang Filaras
 * @license Apache-2.0
 * @version v1.0
 */
$basedir = realpath(
    dirname(__DIR__) . DIRECTORY_SEPARATOR . DIRECTORY_SEPARATOR
);

require_once $basedir . '/vendor/autoload.php';
