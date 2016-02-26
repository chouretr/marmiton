<?php

require '../Model/App.php';

App::load();

if(isset($_GET['page'])){
    $page = $_GET['page'];
}
else{
    $page = 'home';
}
ob_start();
if($page === 'home'){
    require '../mvc/View/accueil.php';
}
if($page === 'page2'){
    require '../mvc/View/page2.php';
}
$content = ob_get_clean();
require '../mvc/View/Template/basepage.php';
//mvc en approche !