<?php

$titulo=$_POST['titulo'];

include 'conexion.php';

$stmt = $pdo->prepare ("INSERT INTO listas (titulo) VALUES(:titulo)");

$stmt->execute(array("titulo" => $titulo));

header('location:paginaPrincipal.php');
	
?>