<?php

namespace App\Table;

use Core\Table\Table;

class IngredientTable extends Table{

    public $table = 'ingredients';

    public static function getIngredient($searchTerm){

        foreach (App::getDB()->query("SELECT * FROM ingredients WHERE nom Like '%".$searchTerm."%' ORDER BY nom ASC", __CLASS__) AS $row);
        {
            $data[] = $row->nom;
            var_dump($data);
        }
        return $data;

    }

    public function show($id)
    {
        return $this->query("SELECT ingredients.nom AS ingredient, unite.nom AS unite, ingredients_recette.quantite AS quantite
            FROM ingredients, unite, ingredients_recette
            WHERE ingredients_recette.recette_id = ?
            AND ingredients_recette.ingredients_id = ingredients.id
            AND ingredients_recette.unite_id = unite.id", array($id));
    }


}

?>