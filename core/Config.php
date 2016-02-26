<?php
/**
 * Created by PhpStorm.
 * User: Layer
 * Date: 25/02/2016
 * Time: 18:22
 */

namespace Core;


class Config{

    private $setting = [];
    private static $_instance;

    public static function getInstance($file)
    {
        if(is_null(self::$_instance)){
            self::$_instance = new Config($file);
        }
        return self::$_instance;
    }

    public function get($key)
    {
        if(!isset($this->setting[$key])){
            return null;
        }
        return $this->setting[$key];
    }

    public function __construct($file)
    {
       $this->setting = require($file);
    }

}
