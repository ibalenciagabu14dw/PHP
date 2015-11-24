<?php

$id_tarea=$_POST['id_tarea'];
$descripcion=$_POST['descripcion'];

include 'conexion.php';

$stmt = $pdo->prepare ("UPDATE tareas SET descripcion= '$descripcion' WHERE id_tarea= '$id_tarea'");

$stmt->execute();

header('location:paginaPrincipal.php');
	
?>