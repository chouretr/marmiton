<?php
/**
 * Created by PhpStorm.
 * User: Layer
 * Date: 19/02/2016
 * Time: 03:46
 */

require '../Autoloader.php';
App\Autoloader::register();

//include '../Database.php';

include 'IngredientTable.php';


echo json_encode($data = App\Table\Ingredient::getIngredient($_GET['term']));
?>