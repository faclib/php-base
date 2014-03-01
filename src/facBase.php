<?php
/**
 * facBase class  - facBase.php file
 *
 * @author     Dmitriy Tyurin <fobia3d@gmail.com>
 * @copyright  Copyright (c) 2014 Dmitriy Tyurin
 */

/**
 * facBase class
 */
class facBase
{

    const VERSION = "0.1.0";

    public static function ezcInit()
    {
        if (!class_exists("ezcBase")) {
            @require_once 'ezc/Base/base.php';
            if (!class_exists("ezcBase")) {
                throw new RuntimeException('Install dependencies to run project (PEAR).');
            }
            spl_autoload_register(function($className) {
                ezcBase::autoload($className);
            });
        }
    }
}