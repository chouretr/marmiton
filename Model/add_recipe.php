<?php

var_dump($_POST);


$test = 0;
$i = 1;
$quantite;
$unite;
$ingredient;


while($test < 2)
{

    $quantite[$test] = $_POST['quantite_' .$i. ''];
    $unite[$test] = $_POST['unite_' .$i. ''];
    $ingredient[$test] = $_POST['ingredient_' .$i. ''];
    $i++;
    $test++;

}
var_dump($quantite);
var_dump($unite);
var_dump($ingredient);


































?>