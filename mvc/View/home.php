<?php
$db = new App\Database('marmiton');
$datas = $db->query('SELECT * FROM ingredients');
var_dump($datas);

?>