<?php

require '../Model/App.php';

App::load();

$app = App::getInstance();

$post = $app->getTable('Categories');

var_dump($post->all());