<?php

require 'class/Autoloader.php';
Autoloader::register();

if (isset($_GET['page']))
{
    $p = $_GET['page'];
}
else
{
    $p = 'accueil';
}
//testlololol
//test2
// Connection a la DB comentaires de moi :p
// encore des coms
// encore un comentaire pour kéké le roxxor
$db = new Database('marmiton');

ob_start();

if($p == 'accueil')
{
    require 'Pages/accueil.php';
}
elseif($p === 'page2')
{
    require 'Pages/page2.php';
}

$content = ob_get_clean();
require 'Pages/template/basepage.php'
?>
