<?php
header('Content-type: application/json');
$_GET['name_search'] = "sou";
if(isset($_GET['name_search'])) {

    $chaine = addslashes($_GET['name_search']);


    try
    {
        $pdo = new PDO("mysql:dbname=marmiton;host=localhost", 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Erreur : ' . $e->getMessage();
    }

    $requete = $pdo->prepare('SELECT recette.id, recette.nom FROM recette WHERE recette.nom LIKE ?');
    $requete->execute(array('%' . $chaine . '%'));
    $tab = $requete->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($tab);
}

//header('Location: ./');
/* $requete = ('SELECT recette.id, recette.nom
FROM recette, ingredients, ingredients_recette
WHERE ingredients_recette.recette_id = recette.id
AND ingredients_recette.ingredients_id = ingredients.id
AND ingredients.nom = ?');*/
?>