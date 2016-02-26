<?php

namespace App\Table;

use Core\Table\Table;


class CategorieTable extends Table{

    protected $table = "categories lol";

    public function all(){

        return $this->db->query("SELECT * FROM categorie");

    }




}

?>