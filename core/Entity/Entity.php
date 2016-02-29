<?php

/**
 * Created by PhpStorm.
 * User: Layer
 * Date: 29/02/2016
 * Time: 21:26
 */
namespace Core\Entity;

class Entity
{
    public function __get($key){
        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
    }
}