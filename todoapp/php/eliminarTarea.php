<?php

$id_tarea = $_POST['id_tarea'];
include 'conexion.php';

$stmt = $pdo->prepare ("DELETE from tareas where id_tarea= '$id_tarea'");
$stmt->execute();

header('location:archivadas.php');
?>