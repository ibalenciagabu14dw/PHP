<?php

$id_lista = $_POST['id_lista'];
include 'conexion.php';

$stmt = $pdo->prepare ("UPDATE tareas SET archivada= '0' where id_lista= '$id_lista'");
$stmt->execute();

$stmt2 = $pdo->prepare ("UPDATE listas SET archivada= '0' where id_lista= '$id_lista'");
$stmt2->execute();

header('location:archivadas.php');
?>