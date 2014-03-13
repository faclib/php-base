<?php
/**
 * parseFields.php file
 *
 * @author     Dmitriy Tyurin <fobia3d@gmail.com>
 * @copyright  Copyright (c) 2014 Dmitriy Tyurin
 */
require_once __DIR__ . '/bootstrap.php';


$f1 = parseFields('field1 , f1', 'fil', array('f1', 'f2'), 'f1');
print_r($f1);

$f2 = parseFields();
print_r($f2);


$n1 = parseNumbers(1,2,3,array('1','7'), '--1');
print_r($n1);

$n2 = parseNumbers();
print_r($n2);

$n1['g']=11;
echo "f1: ". isList($f1)."\n";
echo "f2: ". isList($f2)."\n";
echo "n1: ". isList($n1)."\n";
echo "n2: ". isList($n2)."\n";