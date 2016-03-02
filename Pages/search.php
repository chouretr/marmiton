<?php
header('Content-type: application/json');
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

?>