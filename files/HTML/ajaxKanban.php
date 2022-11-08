<?php
require_once("../PHP/kanban.php");

$estado = $_POST['estado'];
$tasca = $_POST['tasca'];
$tasca2 = new Kanban;
$tasca2->guardarKanban($conn, $tasca, $estado);
?>