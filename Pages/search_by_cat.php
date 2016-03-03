<?php
header('Content-type: application/json');
if(isset($_GET['categorie_id'])) {

    $cate = addslashes($_GET['categorie_id']);


    try
    {
        $pdo = new PDO("mysql:dbname=marmiton;host=localhost", 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Erreur : ' . $e->getMessage();
    }

    $requete = $pdo->prepare('SELECT recette.id, recette.nom
FROM recette, categorie, categories_recette
WHERE categorie.id = ?
AND recette.id = categories_recette.recette_id
AND categorie.id = categories_recette.categorie_id');
    $requete->execute(array($cate));
    $tab = $requete->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($tab);
}

//header('Location: ./');

?>