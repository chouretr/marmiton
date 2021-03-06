<?php


class App{

    private static $_instance;
    private $db_instance;

    public static function getInstance(){
        if(!isset(self::$_instance)){
            self::$_instance = new App();
        }
        return self::$_instance;
    }

    public static function load(){
        require 'Autoloader.php';
        App\Autoloader::register();
        require '../core/Autoloader.php';
        Core\Autoloader::register();
    }

    public function getTable($name){
        $class_name = '\\App\\Table\\' . ucfirst($name) . 'Table';
        return new $class_name($this->getDb());
    }

    public function getDb(){
        $config = Core\Config::getInstance('../config/config.php');
        if(is_null($this->db_instance)){
            $this->db_instance = new Core\Database\Database($config->get('db_name'), $config->get('db_user'), $config->get('db_pass'), $config->get('db_host'));
        }
        return $this->db_instance;


    }
}

