<?php

$id_lista = $_POST['id_lista'];
include 'conexion.php';

$stmt = $pdo->prepare ("DELETE from tareas where id_lista= '$id_lista'");
$stmt->execute();
$stmt = $pdo->prepare ("DELETE from lista_usuario where id_lista= '$id_lista'");
$stmt->execute();
$stmt = $pdo->prepare ("DELETE from listas where id_lista= '$id_lista'");
$stmt->execute();

header('location:archivadas.php');
?>