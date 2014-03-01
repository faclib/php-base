<?php
/**
 * @author Dmitriy Tyurin <fobia3d@gmail.com>
 */
// Падавление ошибок
error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_NOTICE);
// Автокодировка
mb_internal_encoding('UTF-8');

$autoloadFile = __DIR__ . '/../vendor/autoload.php';
if (!file_exists($autoloadFile)) {
    throw new RuntimeException('Install dependencies to run phpunit.');
}
require_once $autoloadFile;

$loader = new \Composer\Autoload\ClassLoader();
$loader->addClassMap(array(__DIR__));
$loader->register();