<?php
echo "<html>";
echo "<head>";
echo "<title>PAGINA PRINCIPAL TODOAPP</title>";
echo "<link rel='stylesheet' type='text/css' href='../css/paginaPrincipal.css'/>";
echo "</head>";
echo "<body>";
echo "<div align='right'>
      <a href='archivadas.php'><img id='archivadas'src='../imagenes/archivadas.png'></a>
      <a href='../index.html'><img  id='index'src='../imagenes/index.png'></a>
      <a href='../html/agregarLista.html'><img id='agregar'src='../imagenes/agregar.png'></a>
      </div>";


include "conexion.php";

//copiar select iker
// $stmt = $pdo->prepare ("SELECT l.id_lista, l.titulo FROM listas l left join lista_usuario u on l.id_lista = u.id_lista WHERE u.id_usuario='1' and l.archivada='1';");
//*********LISTAS**************
$stmt = $pdo->prepare ("SELECT titulo,id_lista FROM listas where archivada = '0'");
$stmt->execute();

foreach($stmt->fetchAll(PDO::FETCH_ASSOC) as $row)
{
 echo "<table id='tabla'border=0>";	

 echo "<hr>";
 //ARCHIVAR LISTA
 echo"<tr>
 		<td><form method='post' action='archivarLista.php'>
 			<input type='image' id='archivar'  src='../imagenes/archivar.png' name='id_lista' value=$row[id_lista] ></a>
 			</form></td>";
  //MOSTRAR LISTA
 echo"	<th bgcolor='08239A'>$row[titulo]</th>";		
 		//MODIFICAR LISTA
 		echo"<td> 
 			<form method='post' action='modificarLista.php'>
 			<input type='image' id='modificarLista' src='../imagenes/modificarlista.png' name='id_lista' value=$row[id_lista] ></a>
 			</form>
 		</td>
 		
 	 </tr>";

$stmt2 = $pdo->prepare ("SELECT id_tarea, descripcion FROM tareas where id_lista = $row[id_lista] and archivada='0'");
$stmt2->execute();
//*********TAREAS*********
foreach($stmt2->fetchAll(PDO::FETCH_ASSOC) as $row2){
	//ARCHIVAR TAREA
 echo"<tr>
 		<td><form method='post' action='archivarTarea.php'>
 			<input type='image' id='archivar' src='../imagenes/archivar.png' name='id_tarea' value=$row2[id_tarea] >
 			</form></td>";
 //MOSTRAR TAREA
 echo"<th>$row2[descripcion]</th>";
 //MODIFICAR TAREA
 echo "<td><form method='post' action='modificarTarea.php'>
 		 <input type='hidden' name='id_lista' value='$row[id_lista]'>
 		 <input type='hidden' name='titulo' value='$row[titulo]'>
 		 <input type='hidden' name='descripcion' value='$row2[descripcion]'>
 			<input type='image' id='modificarTarea' src='../imagenes/modificartarea.png' name='id_tarea' value='$row2[id_tarea]'>
 			</form></td>
 	 </tr>";

}

//AGREGAR TAREA
 echo "<tr>
<td></td>
 			<td><form method='post' action='agregarTarea.php'>
 		 <input type='hidden' name='id_lista' value='$row[id_lista]'>
 		 <input type='hidden' name='titulo' value='$row[titulo]'>
 			<input type='image' id='agregarTarea' src='../imagenes/agregar.png'>
 			</form></td>
 			<td></td>
 	   </tr>";
 echo "</table>";
 echo "<br>";
 echo "<br>";
 echo "<br>";
}

echo "</body>";
echo "</html>";
?>
