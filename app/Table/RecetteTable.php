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
    public function show($id)
    {
        return $this->db->prepare("SELECT * FROM recette WHERE id = ?", array($id));
    }

    public function expl($recettes)
    {
        var_dump($recettes->instructions);
        return explode('</br>', $recettes->instructions);
    }

}