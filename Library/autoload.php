<?php

$basedir = realpath(dirname(__DIR__));

$lib = json_encode([
    'vendor' => $basedir . '/vendor',
    'local'  => $basedir . '/Library/vendor',
]);
$lib = json_decode($lib);

if (file_exists($lib->vendor . '/autoload.php'))
{
    require $lib->vendor . '/autoload.php';
    
    return false;
}

$loader = require $lib->local . '/autoload.local.php';
$loader = new AutoloadLocal();
return $loader->init($lib->local);
