<?php

namespace App\Table;

use Core\Table\Table;


class CategorieTable extends Table{

    protected $table = "categories";

    public function all(){

        return $this->db->query("SELECT * FROM categorie");

    }

    public function show($id)
    {
        return $this->db->prepare('SELECT categorie.nom
              FROM categorie, categories_recette
              WHERE categories_recette.categorie_id = categorie.id
              AND categories_recette.recette_id = ?', array($id));
    }


}

?>