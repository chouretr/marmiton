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

    public function show(){


    }

}