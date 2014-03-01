<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * init.php file
 *
 * @author     Dmitriy Tyurin <fobia3d@gmail.com>
 * @copyright  Copyright (c) 2014 Dmitriy Tyurin
 */

// defined('SYSPATH') OR die('No direct script access.');

/*
defined('ROOT')   or define('ROOT', (dirname(__DIR__)));
defined('BASE_DIR')   or define('BASE_DIR', (dirname(__DIR__)));
defined('HTML_DIR')   or define('HTML_DIR',   BASE_DIR . "/html");
defined('LOGS_DIR')   or define('LOGS_DIR',   BASE_DIR . "/logs");
defined('CACHE_DIR')  or define('CACHE_DIR',  BASE_DIR . "/cache");
defined('CONFIG_DIR') or define('CONFIG_DIR', BASE_DIR . "/config");
*/
// Падавление ошибок
error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_NOTICE);
// Автокодировка
mb_internal_encoding('UTF-8');


// PEAR class
if (!class_exists("ezcBase")) {
    @require_once 'ezc/Base/base.php';
    if (!class_exists("ezcBase")) {
        throw new RuntimeException('Install dependencies to run project (PEAR).');
    }
    spl_autoload_register(function($className) {
        ezcBase::autoload($className);
    });
}

// =========================================
// Core Configuration. NOT CHANGE
// =========================================

// declare(encoding = 'UTF-8');
// <    >     "      пробел
// &lt; &gt; &quot; &nbsp;
// @error_reporting(E_ALL & ~E_NOTICE);


// Начальное время
if (!$_SERVER["REQUEST_TIME_FLOAT"]) {
    $_SERVER["REQUEST_TIME_FLOAT"] = microtime(true);
}
if (!defined("TIME_START")) {
    define("TIME_START", $_SERVER["REQUEST_TIME_FLOAT"]);
}
define('DS', DIRECTORY_SEPARATOR);
define('BR', '<br />' . PHP_EOL);

/** Указывае что скрипт был запущен через консоль */
define('IS_CLI', !isset($_SERVER['HTTP_HOST']));
define('REMOTE_SERVER', !IS_CLI && $_SERVER['REMOTE_ADDR'] != '127.0.0.1');

// Закешируем  в буфер
if (isset($_SERVER['HTTP_HOST']) && !ini_get('zlib.output_compression') && function_exists('ob_gzhandler')) {
    ob_start('ob_gzhandler');
}
