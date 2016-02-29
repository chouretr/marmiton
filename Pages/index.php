<?php

require '../app/App.php';

App::load();

$app = App::getInstance();







if(isset($_GET['page'])){
    $page = $_GET['page'];

}
else{
    $page = 'home';
}

if($page === 'home'){
    $controller = new \App\Controller\PostsController();
    $controller->index();
}
if($page === 'page2'){
    $controller = new \App\Controller\PostsController();
    $controller->add();
}
if($page === 'recipe'){
    $controller = new \App\Controller\PostsController();
    $controller->recipe();
}
if($page === 'recette'){
    $controller = new \App\Controller\PostsController();
    $controller->add();
}