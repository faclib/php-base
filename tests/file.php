<?php
/**
 * file.php file
 *
 * @author     Dmitriy Tyurin <fobia3d@gmail.com>
 * @copyright  Copyright (c) 2014 Dmitriy Tyurin
 */
require_once __DIR__ . '/bootstrap.php';


$f = fileExistsInPath('ezc/Base/base.php');
print_r($f);

$kv = parse_key_to_array(array('a','b', 'c'), 'value');
print_r($kv);

