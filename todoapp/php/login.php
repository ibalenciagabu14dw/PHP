<?php
$user=$_POST['usuario'];
$pass=$_POST['pass'];


include 'conexion.php';

$stmt = $pdo->prepare ("SELECT * FROM usuarios WHERE nombre='".$user."' and password='".$pass."';");
$stmt->execute();
 
$nr = $stmt ->rowCount();

if($nr == 1){ 
 
 header ('location:paginaPrincipal.php');
 }
 else {
 header ('location:../index.html');
 };



?>
