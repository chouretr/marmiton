<?php
namespace App\Table;

use Core\Table\Table;

class RecetteTable extends Table{




    public function last()
    {
        return $this->db->query("SELECT * FROM recette");
    }
    public function resume()
    {

    }
    public function all()
    {
        return $this->db->query("SELECT * FROM recette");
    }

}