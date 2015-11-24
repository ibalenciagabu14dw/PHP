<?php

$nombre=$_POST['nombre'];
$password=$_POST['password'];

include 'conexion.php';

$stmt = $pdo->prepare ("INSERT INTO usuarios (nombre, password) VALUES(:nombre, :password)");

	$stmt->execute(array("nombre" => $nombre,"password" => $password));

	header('location:paginaPrincipal.php');
	
?>