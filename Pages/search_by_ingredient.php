<?php


    $arr = array(); // On cr�e l'array qui recevra les donn�es
    $tmp = '';
    for ($i = 1 ; isset($_GET['ingredient_' . $i]) ; $i++)
    {
        $arr[$i] = $_GET['ingredient_' . $i]; // On y met les donn�es
        $tmp .= "ingredients.nom = ? OR ";
    }
$tmp = substr($tmp, 0, -4);

//header('Content-type: application/json');
if(isset($_GET['ingredient_1'])) {

   // $chaine = addslashes($_GET['name_search']);


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
AND ($tmp)
GROUP BY recette.nom";
    var_dump($requete);
    var_dump($arr);
    echo $arr[1];
    echo ($requete);
    $res = $pdo->prepare($requete);
    $j = 1;
    while($j < $i)
    {
        $res->bindParam(1, $arr[$j], PDO::PARAM_STR);
        $j++;
    }
    $res->execute();
    $tab = $res->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($tab);
}
?>