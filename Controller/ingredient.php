<?php
include '../Model/Class/Database.php';
$db = new Database('marmiton');
$searchTerm = $_GET['term'];
foreach ($db->query("SELECT * FROM ingredients WHERE nom Like '%".$searchTerm."%' ORDER BY nom ASC") AS $row);
{
    $data[] = $row->nom;
}
echo json_encode($data);
?>