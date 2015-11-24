<?php

$id_lista=$_POST['id_lista'];
$titulo=$_POST['titulo'];

include 'conexion.php';

$stmt = $pdo->prepare ("UPDATE listas SET titulo= '$titulo' WHERE id_lista= '$id_lista'");

$stmt->execute();

header('location:paginaPrincipal.php');
	
?>