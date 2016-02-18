<?php
/*$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'marmiton';
//connect with the database
$db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
//get search term*/
include '../Model/Class/Database.php';

$db = new Database('marmiton');

$searchTerm = $_GET['term'];
//get matched data from skills table

foreach ($db->query("SELECT * FROM ingredients WHERE nom Like '%".$searchTerm."%' ORDER BY nom ASC") AS $row);
{
    $data[] = $row->nom;
}

/*$query = $db->query("SELECT * FROM ingredients WHERE nom LIKE '%".$searchTerm."%' ORDER BY nom ASC");
while ($row = $query->fetch_assoc()) {
    $data[] = $row['nom'];
}*/

//return json data;
echo json_encode($data);
?>