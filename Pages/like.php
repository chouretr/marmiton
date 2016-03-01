<?php
require 'LikeClass.php';
require '../core/Database/Database.php';
if($_SERVER['REQUEST_METHOD'] != 'POST')
{
    $http_response_code(403);
    die();
}
$pdo = new PDO("mysql:dbname=marmiton;host=localhost", 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$vote = new vote($pdo);
if($_GET['vote'] == 1)
{
    $vote->like($_GET['recette_id'], $_SERVER["REMOTE_ADDR"]);
}
else
{
    $vote->dislike($_GET['recette_id'], $_SERVER["REMOTE_ADDR"]);
}
$vote->updateCount($_GET['recette_id']);
header('Location: index.php?page=recipe&id=' . $_GET['recette_id']);