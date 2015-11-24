<?php

$id_tarea = $_POST['id_tarea'];
include 'conexion.php';

$stmt = $pdo->prepare ("UPDATE tareas SET archivada= '1' where id_tarea= '$id_tarea'");
$stmt->execute();

header('location:paginaPrincipal.php');
?>