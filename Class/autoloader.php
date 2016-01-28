<?php

/**
 * Created by PhpStorm.
 * User: Robin
 * Date: 27/01/2016
 * Time: 16:02
 */
class Autoloader
{
    static function register()
    {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    static function autoload($class_name)
    {
        require 'Class/' .$class_name. '.php';
    }
}