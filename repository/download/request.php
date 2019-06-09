<?php
/**
 * File downloading...
 *
 * @author Ayus Irfang Filaras
 * @license Apache-2.0
 * @version v1.0
 */
use \Dariuszp\CliProgressBar as Manager;
use \GuzzleHttp\Client;
use \GuzzleHttp\Psr7\Stream;
/**
 * Cek parameter yang diinput
 *
 * @param url
 */
if (! isset($argv[1]) && empty($argv[1])) exit("Paramater (url) diperlukan untuk menjalankan.\n");

/**
 * Parameter yang akan digunakan
 * harus berisi url bukan yang lain
 *
 * @param url
 */
$param = isset($argv[1]) ? (String) $argv[1] : '';

/*
 * Cek isi dari parameter
 */
(! (int) $param) OR exit("Parameter harus berisi text atau string\n");

/*
 * Membuat direktori penyimpanan sementara
 */
$tmpdir = $basedir . '/tmp';

/*
 * Membuat nama file yang akan disimpan
 */
$filename = substr($param,-4) . '.zip';

$path = $tmpdir . '/' . $filename;

function prosesUnduhan($url, $path)
{
    $client = new Client();

    $fp = fopen($path, 'w');

    $respone = $client->get($url);
    $status = $respone->getStatusCode();
    $length = $respone->getHeaderLine('Content-Length');

    if ((int) $status == 200)
    {
        $client->get($url, ['save_to' => $path]);
        return progressBar($length);
    }
}

function start_download()
{
    global $param, $path;

    return prosesUnduhan($param, $path);
}

function progressBar($filesize)
{
    $fs = $filesize;

    printf("Total unduhan: %d bytes\n\n", $fs);
    
    for ($i=0; $i <= $fs; $i++)
    {
        if ($fs > 1024) {
            $i += ($fs + 512) / 100;
        }
        $progress = new Manager($fs, $i);
        $progress->setColorToGreen();;
        $progress->display();
        sleep(1);
        $progress->end();
    }
}
