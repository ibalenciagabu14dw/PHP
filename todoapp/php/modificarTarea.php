<html> 
<head> 
<title>modificar TAREA</title> 
</head> 
<body>
<?php  

$titulo = $_POST['titulo'];
$id_tarea = $_POST['id_tarea'];
$descripcion = $_POST['descripcion'];

echo "Lista: $titulo";
echo "<br>";

echo"    <form action='tareaModificada.php' method='POST'>
          <input type='hidden' name='id_tarea' value='$id_tarea'>
          titulo: <input type='text' name='descripcion' size='20' value= '$descripcion'><br>
          <input type='submit' value='Cambiar titulo'></form>";
  
?> 

</body> 

</html> 