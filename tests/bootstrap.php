<?php
/**
 * @author Dmitriy Tyurin <fobia3d@gmail.com>
 */


$autoloadFile = __DIR__ . '/../vendor/autoload.php';
if (!file_exists($autoloadFile)) {
    throw new RuntimeException('Install dependencies to run phpunit.');
}
require_once $autoloadFile;

$loader = new \Composer\Autoload\ClassLoader();
$loader->addClassMap(array(__DIR__));
$loader->register();