<?php

namespace App\Table;

use Core\Table\Table;

class Ingredient extends Table{

    public static $table = 'ingredients';

    public static function all(){

        return App::getDB()->query("SELECT * FROM categorie", __CLASS__);

    }

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