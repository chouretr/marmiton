<?php

namespace Core\Table;

use Core\Database\Database;


Class Table{

    protected $table;
    protected $db;


    public function __construct(Database $db)
    {
        $this->db = $db;
        if(is_null($this->table)){
            $parts = explode('\\', get_class($this));
            $class_name = end($parts);
            $this->table = strtolower(str_replace('Table', '', $class_name));
        }

    }

    public function all(){
        return $this->query('SELECT * FROM ' . $this->table);

    }

    public function query($sql, $attributes = null, $one = false){
        if($attributes){
            return $this->db->prepare($sql, $attributes, str_replace('Table', 'Entity', get_class($this)), $one);
        }
        else{
            return $this->db->query($sql, str_replace('Table', 'Entity', get_class($this)), $one);
        }

    }

    public function add($post){
        $sql_parts = [];
        //var_dump($post);
        ini_set("display_errors",0);error_reporting(0);
        $heurprep = 0;
        $heurcuis = 0;
        foreach($post as $k => $v){

            if($k == 'heurprep')
            {
                if($v != 0) {
                    $heurprep = 60 / $v;
                }
            }
            elseif($k == 'minprep')
            {
                $v = $heurprep + $v;
                $k = 'temps_preparation_minute';
                $sql_parts[] = "$k = ?";
                $attributes_recette[] = $v;
            }
            elseif($k == 'heurcuis')
            {
                if($v != 0) {
                    $heurcuis = 60 / $v;
                }
            }
            elseif($k == 'mincuis')
            {
                $v = $heurcuis + $v;
                $k = 'temps_cuisson_minute';
                $sql_parts[] = "$k = ?";
                $attributes_recette[] = $v;
            }

            elseif($k == 'quantite')
            {
                $b = 1;
                $sql_quantite[] = "$k = ?";

                do
                {


                    if($v[$b] != null)
                    {
                       // $sql_ingredient[] = $v[$b];
                        $b++;
                        //var_dump($sql_ingredient);
                    }

                } while($b != count($v) + 1);
                $sql_ingredient[] = $v;

            }

            elseif($k == 'ingredient') {
                $res = $this->query("SELECT * FROM ingredients");
                $a = 1;
                $i = 0;
                $sql[] = "$k = ?";

                while ($v[$a]) {
                    while ($res[$i]) {
                        if ($res[$i]->nom == $v[$a]) {
                            $v[$a] = $res[$i]->id;
                            //$sql_ingredient[] = $v[$a];
                        }
                        $i++;
                    }
                    $i = 0;

                    $a++;
                }
                $sql_ingredient[] = $v;
            }
            elseif($k == 'unite') {
                $res = $this->query("SELECT * FROM unite");
                $a = 1;
                $i = 0;
                $sql[] = "$k = ?";

                while ($v[$a]) {
                    //var_dump($v[$a]);
                    //var_dump($res[$i]->nom, $v[$a]);
                    while ($res[$i]) {
                        if ($res[$i]->nom == $v[$a]) {
                            $v[$a] = $res[$i]->id;
                            //$sql_ingredient[] = $v[$a];

                        }
                        $i++;
                    }
                    $i = 0;

                    $a++;
                }
                $sql_ingredient[] = $v;

            }
            elseif($k == 'instructions') {

                //var_dump($k, $v);
                $nb = count($v) + 1;
                for($i = 1; $i < $nb; $i++){

                    $v[0] .= $v[$i].'</br>';
                    //var_dump($v);
                    unset($v[$i]);
                    //var_dump($v);
                    //var_dump($i);


                }
                $sql_parts[] = "$k = ?";
                $attributes_recette[] = $v[0];

            }
            else {


                /*{
                    var_dump($ingre);
                    echo '------------------';
                    foreach($ingre as $value){
                        echo "debut ";

                        //var_dump($a, $v[$a], $value);
                        //var_dump($value);
                        if($lol->nom == $v[$a])
                        {
                            echo 'condition';
                            $v[$a] = $lol->id;
                            var_dump($v[$a]);
                        }
                        //$a++;
                        echo '  fin';
                    }*/

                //$attributes_recette[] = $v;
                $sql_parts[] = "$k = ?";
                $attributes_recette[] = $v;
            }
            //$a++;
        }
        //var_dump($sql);
        //var_dump($sql_ingredient);

        $sql_parts = implode(', ', $sql_parts);
        //var_dump($sql_parts);
        //var_dump($attributes_recette);
        //var_dump($sql_parts);
        //var_dump($attributes_recette);
        $this->query("INSERT INTO {$this->table} SET $sql_parts", $attributes_recette, true);
        $id = $this->query("SELECT id FROM recette ORDER BY id DESC LIMIT 1", null, true);
        $attributes_notes[] = $id->id;
        $sql_ingredient[] = $id->id;
        //var_dump($sql_ingredient);
        //var_dump($sql_ingredient);
        //var_dump($attributes_notes);
        $this->query("INSERT INTO votes SET id_recette = ?", $attributes_notes, true);
        //echo count($sql_ingredient);
        $c = 0;
        $d = 1;
        $e = 0;
        $f = 0;

        while($e < count($sql_ingredient[1])) {
            //$sql_ingredient[$c][] = $id->id;
            $tableadark = null;
            $c = 0;
            //var_dump($sql_ingredient);
            while ($c < count($sql_ingredient) - 1) {
                $tableadark[] = $sql_ingredient[$c][$d];

                //var_dump($tableadark);

                if ($c == 2) {
                    //echo 'value';
                    $ingredient[0] = $tableadark[2];
                    //var_dump($ingredient);

                    //var_dump($this->query("SELECT id FROM ingredients WHERE id=?", $ingredient, true));
                    /*if ($this->query("SELECT id FROM ingredients WHERE id=?", $ingredient, true) != null) {
                        echo 'lllllllllllllllllllllllllllllllllllllllllllllll';
    //$this->query("INSERT INTO ingredients SET nom = ?", $ingredient, true);
                    }*/

                    if ($this->query("SELECT nom FROM ingredients WHERE nom=?", $ingredient, true) == null && $this->query("SELECT id FROM ingredients WHERE id=?", $ingredient, true) == null) {
                        $this->query("INSERT INTO ingredients SET nom = ?", $ingredient, true);
                        $id_add = $this->query("SELECT id FROM ingredients WHERE nom = ?", $ingredient, true);
                        //echo 'lllllllllllllllllllllllllllllllllllllllllllllll';
                        $tableadark[2] = $id_add->id;
                        //var_dump($tableadark);
                        //echo 'lllllllllllllllllllllllllllllllllllllllllllllll';
                    }

                }


                $c++;
            }


            $tableadark[] = $id->id;
            //var_dump($tableadark);
            //echo count($sql_ingredient);
            /*if($this->query("SELECT nom FROM ingredients WHERE nom=?", $tableadark[2], true) == false) {
                $ingredient_add[] = $tableadark[2];
                //var_dump($ingredient_add);
                $this->query("INSERT INTO ingredients SET nom = ?", $ingredient_add, true);
            }*/

            $this->query("INSERT INTO ingredients_recette SET quantite = ?, unite_id = ?, ingredients_id = ?, recette_id = ?", $tableadark, true);
            $e++;
            $d++;
        }
        //var_dump($tableadark);
        return true;



    }


}