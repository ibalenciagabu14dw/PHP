<?php

$id_lista = $_POST['id_lista'];
include 'conexion.php';

$stmt = $pdo->prepare ("UPDATE tareas SET archivada= '1' where id_lista= '$id_lista'");
$stmt->execute();

$stmt = $pdo->prepare ("UPDATE listas SET archivada= '1' where id_lista= '$id_lista'");
$stmt->execute();

header('location:paginaPrincipal.php');
?>