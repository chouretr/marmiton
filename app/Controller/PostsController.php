<?php


namespace App\Controller;

use Core\Controller\Controller;
use \App;

class PostsController extends AppController{

    public function index(){
        $recettes = App::getInstance()->getTable('recette')->all();
        $categories = App::getInstance()->getTable('categorie')->all();
        $last_recipe = APP::getInstance()->getTable('recette')->last_id();
        $best_likes = APP::getInstance()->getTable('recette')->best_like();
        $this->render('posts.index', compact('recettes', 'categories', 'last_recipe', 'best_likes'));


    }

    public function show(){
        $recette = App::getInstance()->getTable('recette');


    }

    public function add(){
        $recettes = App::getInstance()->getTable('recette')->all();
        $categories = App::getInstance()->getTable('categorie')->all();
        $this->render('posts.add');
        $add = App::getInstance()->getTable('recette');
        if(!empty($_POST)){

            $n = 0;
            foreach($_POST as $k => $v)
            {
                if(strstr($k, 'ingredient') == true)
                {
                    $n++;
                }

            }
            $o = 0;
            foreach($_POST as $k => $v)
            {
                if(strstr($k, 'etape') == true)
                {
                    $o++;
                }

            }

            for($i = 1; $i <= $n; $i++)
            {
                $quantite[$i] = $_POST['quantite_' .$i. ''];
                $unite[$i] = $_POST['unite_' .$i. ''];
                $ingredient[$i] = $_POST['ingredient_' .$i. ''];

            }

            for($i = 1; $i <= $o; $i++)
            {
                $etape[$i] = $_POST['etape_' .$i.''];
            }


           $add->add([
               'nom' => $_POST['nom'],
               'categories_id' => $_POST['typeplat'],
               'heurprep' => $_POST['heurprep'],
               'minprep' => $_POST['minprep'],
               'heurcuis' => $_POST['heurcuis'],
               'mincuis' => $_POST['mincuis'],
               //'nbport' => $_POST['nbport'],
               'quantite' => $quantite,
               'unite' => $unite,
               'ingredient' => $ingredient,
               'instructions' => $etape


            ]);
            if($add == true)
            {
                header("HTTP/1.0 404 Not Found");
            }

        }

    }

    public function recipe()
    {
        $recettes = App::getInstance()->getTable('recette')->show($_GET['id']);
        $categories = App::getInstance()->getTable('categorie')->show($_GET['id']);
        $ingredients = App::getInstance()->getTable('ingredient')->show($_GET['id']);
        $instructions = APP::getInstance()->getTable('recette')->expl($recettes);


        $this->render('posts.recipe', compact('recettes', 'categories', 'ingredients', 'instructions', 'progress'));
    }

}