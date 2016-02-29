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

    public function categories(){


    }

    public function add(){
        $recettes = App::getInstance()->getTable('recette')->all();
        $categories = App::getInstance()->getTable('categorie')->all();
        $this->render('posts.add');

    }

    public function recipe()
    {
        $recettes = App::getInstance()->getTable('recette')->show('1');
        $categories = App::getInstance()->getTable('categorie')->show('1');
        $ingredients = App::getInstance()->getTable('ingredient')->show('1');
        $instructions = APP::getInstance()->getTable('recette')->expl($recettes);
        $this->render('posts.recipe', compact('recettes', 'categories', 'ingredients', 'instructions'));
    }

}