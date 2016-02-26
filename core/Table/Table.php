<?php

namespace Core\Table;


Class Table{

    protected $table;
    protected $db;


    public function __construct(\Core\Database\Database $db)
    {
        $this->db = $db;
        if(is_null($this->table)){
            $parts = explode('\\', get_class($this));
            $class_name = end($parts);
            $this->table = strtolower(str_replace('Table', '', $class_name));
        }

    }

    public function all(){
        return $this->db->query('SELECT * FROM ingredients');

    }

    public function query($sql, $attributes = null, $one = false){
        if($attributes){
            return $this->db->prepare($sql, $attributes, str_replace('Table', 'Entity', get_class($this)), $one);
        }
        else{
            return $this->db->query($sql, str_replace('Table', 'Entity', get_class($this)), $one);
        }

    }

}