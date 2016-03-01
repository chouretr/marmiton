<?php
namespace App\Table;

use Core\Table\Table;

class RecetteTable extends Table{




    public function last()
    {
        return $this->query("SELECT * FROM recette");
    }
    public function resume()
    {

    }
    public function all()
    {
        return $this->query("SELECT * FROM recette");
    }
    public function show($id)
    {
        $res = $this->query("SELECT * FROM recette WHERE id = ?", array($id));
        return ($res);
    }

    public function expl($recettes)
    {
        foreach ($recettes as $result)
        {
            $tab = $result->instructions;
        }
        return explode('</br>', $tab);
    }

}