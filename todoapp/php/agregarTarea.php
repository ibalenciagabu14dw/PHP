<?php

$id_lista=$_POST['id_lista'];
$titulo=$_POST['titulo'];
include 'conexion.php';

echo "Lista: $titulo";
echo "<br>";
echo "Tarea:";
echo"<form method='post' action='tareaAgregada.php'>
    <input type='hidden' name='id_lista' value='$id_lista'>
 	<input type='text' id='descripcion' name='descripcion'>
 	 <input type='submit' value='AGREGAR'>
 	 </form>";


?>