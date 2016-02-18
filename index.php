<?php

require 'Model/Class/Autoloader.php';
Autoloader::register();

if (isset($_GET['page']))
{
    $p = $_GET['page'];
}
else
{
    $p = 'accueil';
}

ob_start();

if($p == 'accueil')
{
    require 'Pages/accueil.php';
}
elseif($p === 'page2')
{
    require 'Pages/page2.php';
}
elseif($p === 'testautocompletion')
{
    require 'Pages/testautocompletion.php';
}

$content = ob_get_clean();
require 'Pages/template/basepage.php';


