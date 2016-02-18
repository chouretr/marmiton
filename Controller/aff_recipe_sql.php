<?php
include '../Model/Class/Database.php';
$db = new Database('marmiton');

$_GET['recette'] = "1";
$sql = ('SELECT categorie.nom
              FROM categorie, categories_recette
              Where categories_recette.categorie_id = categorie.id
              AND categories_recette.recette_id = ?');
try
{
    $data = $db->prepare($sql, array($_GET['recette']));
}
catch(Exception $e)
{
    ('Erreur : '.$e->getMessage());
}
foreach ($db->prepare($sql, array($_GET['recette'])) as $data)
{
    echo $data->nom;
}
var_dump($data);
