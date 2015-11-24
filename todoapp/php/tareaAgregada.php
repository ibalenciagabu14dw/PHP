<?php

$id_lista=$_POST['id_lista'];
$descripcion=$_POST['descripcion'];

include 'conexion.php';

$stmt = $pdo->prepare ("INSERT INTO tareas (descripcion, id_lista) VALUES(:descripcion, :id_lista)");

$stmt->execute(array("descripcion" => $descripcion, "id_lista" => $id_lista,));

header('location:paginaPrincipal.php');
	
?>