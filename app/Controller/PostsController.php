<?php


namespace App\Controller;

use Core\Controller\Controller;
use \App;

class PostsController extends AppController{

    public function index(){
        $recette = App::getInstance()->getTable('recette')->all();
        $categories = App::getInstance()->getTable('categorie')->all();
        $this->render('posts.index');

    }

    public function categories(){


    }

    public function add(){
        $recette = App::getInstance()->getTable('recette')->all();
        $categories = App::getInstance()->getTable('categorie')->all();
        $this->render('posts.add');

    }

    public function show(){


    }

}