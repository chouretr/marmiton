<?php

require '../../core/Database/Database.php';

$db = new \Core\Database\Database('marmiton');


$secure = $_GET['term'];
$resultas = $db->query('SELECT nom FROM ingredients WHERE ingredients.nom LIKE "%'.$secure.'%" ORDER BY nom LIMIT 25');


foreach($resultas as $result){
    //var_dump($result->nom);
    $suggestions[] = $result->nom;
}
echo json_encode($suggestions);


?>

