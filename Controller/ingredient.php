<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'marmiton';
//connect with the database
$db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
//get search term
$searchTerm = $_GET['term'];
//get matched data from skills table
$query = $db->query("SELECT * FROM ingredients WHERE nom LIKE '%".$searchTerm."%' ORDER BY nom ASC");
while ($row = $query->fetch_assoc()) {
    $data[] = $row['nom'];
}
//return json data
echo json_encode($data);
?>