<?php
require  'Model/Class/Database.php';
$db = new Database('marmiton');

$_GET['recette'] = "1";


try
{
    $categorie = $db->prepare('SELECT categorie.nom
              FROM categorie, categories_recette
              WHERE categories_recette.categorie_id = categorie.id
              AND categories_recette.recette_id = ?', array($_GET['recette']));
}
catch(Exception $e)
{
    ('Erreur : '.$e->getMessage());
}

try
{
    $tpsprep = $db->prepare('SELECT temps_preparation_minute FROM recette WHERE id = ?', array($_GET['recette']));
}
catch(Exception $e)
{
    ('Erreur : '.$e->getMessage());
}

try
{
    $tpscuisson = $db->prepare('SELECT temps_cuisson_minute FROM recette WHERE id = ?', array($_GET['recette']));
}
catch(Exception $e)
{
    ('Erreur : '.$e->getMessage());
}

try
{
    $ingredients = $db->prepare('SELECT ingredients.nom AS ingredient, unite.nom AS unite, ingredients_recette.quantite AS quantite
FROM ingredients, unite, ingredients_recette
WHERE ingredients_recette.recette_id = ?
AND ingredients_recette.ingredients_id = ingredients.id
AND ingredients_recette.unite_id = unite.id', array($_GET['recette']));
}
catch(Exception $e)
{
    ('Erreur : '.$e->getMessage());
}

try
{
    $instructions = $db->prepare('SELECT instructions FROM recette WHERE id = ?', array($_GET['recette']));
}
catch(Exception $e)
{
    ('Erreur : '.$e->getMessage());
}

try
{
    $description = $db->prepare('SELECT description FROM recette WHERE id = ?', array($_GET['recette']));
}
catch(Exception $e)
{
    ('Erreur : '.$e->getMessage());
}

foreach ($instructions as $result)
{
    $tab = $result->instructions;
}
$tab = explode("</div>", $tab);

?>
