<?php
/**
 * tpm-test.php file
 *
 * @author     Dmitriy Tyurin <fobia3d@gmail.com>
 * @copyright  Copyright (c) 2014 Dmitriy Tyurin
 */
require_once __DIR__ . '/bootstrap.php';
//print_r($_ENV);
//$fn = $_ENV["dump.callback"];
//var_dump($fn);

//$_ENV["dump.callback"] = function($var) {
//    echo REMOTE_SERVER;
//    var_dump($var);
//};


$a1 = array(1,2,3);
$a2 = array(8, 'a', 'key1'=>11);

//dump($a);

$a3 = array('b', 'c', 'key1' => 'new key');


$am1 = am($a1, $a2, $a3, array(1));
print_r($am);
//$fn = $_ENV["dump.callback"];
//$fn(1);

$f = array('key1','1','2',7);

$ak1 = ak($am1, $f);
print_r($ak1);


sortByKey($ak1, '2');



