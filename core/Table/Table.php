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

}