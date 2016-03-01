<?php


namespace App\Controller;

use Core\Controller\Controller;
use \App;

class PostsController extends AppController{

    public function index(){
        $recettes = App::getInstance()->getTable('recette')->all();
        $categories = App::getInstance()->getTable('categorie')->all();
        $this->render('posts.index', compact('recettes', 'categories'));

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
           $add->add([
               'nom' => $_POST['nom'],
               'categories_id' => $_POST['typeplat']
            ]);

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