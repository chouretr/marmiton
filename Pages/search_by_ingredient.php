<?php

header('Content-type: application/json');
if(isset($_GET['name_search'])) {

    $chaine = addslashes($_GET['name_search']);


    try {
        $pdo = new PDO("mysql:dbname=marmiton;host=localhost", 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Erreur : ' . $e->getMessage();
    }

    $requete = "SELECT recette.id, recette.nom
FROM recette, ingredients, ingredients_recette
WHERE ingredients_recette.recette_id = recette.id
AND ingredients_recette.ingredients_id = ingredients.id
AND (ingredients.nom = ? OR ingredients.nom = ?)
GROUP BY recette.nom";

    $res = $pdo->prepare($requete);
    $res->execute(array('%' . $chaine . '%'));
    $tab = $res->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($tab);
}
?>