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


}

?>