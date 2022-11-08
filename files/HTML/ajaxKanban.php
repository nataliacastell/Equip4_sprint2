<?php
require_once("../PHP/TascaClass.php");

$estado = $_POST['estado'];
$tasca = $_POST['tasca'];
$tasca2 = new Tasca;
$tasca2->modificarTasca($connexioDB, $tasca, $estado);
?>