<?php
$baseDir = dirname(__DIR__, 2);
ini_set('error_log', $baseDir . '/server.err.log');
ini_set('log_errors', true);
error_reporting(E_ALL);

include_once 'Psr4AutoloaderClass.php';

use vendor\autoloadPsr4\Psr4AutoloaderClass;

$loader = new Psr4AutoloaderClass();
$loader->register();
$loader->addNamespace('Droids\\', $baseDir);
