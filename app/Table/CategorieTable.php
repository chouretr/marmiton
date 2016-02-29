<?php

namespace App\Table;

use Core\Table\Table;


class CategorieTable extends Table{

    protected $table = "categories";

    public function all(){

        return $this->query("SELECT * FROM categorie");

    }

    public function show($id)
    {
        return $this->query('SELECT categorie.nom
            FROM categorie, categories_recette
            WHERE categories_recette.categorie_id = categorie.id
            AND categories_recette.recette_id = ?', array($id));
    }


}

?>