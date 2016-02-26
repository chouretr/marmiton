<?php

include '../Model/Table/Database.php';

var_dump($_POST);


$test = 0;
$i = 1;
$quantite;
$unite;
$ingredient;
$etape = '';

while($test < 3)
{

    $quantite[$test] = $_POST['quantite_' .$i. ''];
    $unite[$test] = $_POST['unite_' .$i. ''];
    $ingredient[$test] = $_POST['ingredient_' .$i. ''];
    $etape .= '<div class="etape_'.$i.'">' .$_POST['etape_' .$i.'']. '</div>';
    $i++;
    $test++;

}
var_dump($quantite);
var_dump($unite);
var_dump($ingredient);
var_dump($etape);

$db = new Database('marmiton');



$req = $db->prepare('SELECT nom FROM ingredients WHERE id = ?', $t);

/*try
{
    $db->exec('INSERT INTO recette(nom, categories_id, notes_id, description, instructions) VALUES(\'Soupe\', \'1\', \'1\', \'Bah cest une soupe\', \'Etape 1 ectect\')');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}*/


































?>