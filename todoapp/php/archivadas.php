<html>
	<head>
		<title>Archivadas</title>
		<link rel='stylesheet' type='text/css' href='../css/paginaPrincipal.css'/>
	</head>
	<body>
		<h1>Tareas Archivadas</h1><a href="paginaPrincipal.php"><img src="../imagenes/paginaPrincipal.png" title="Home" height="50"/></a>
		<br/>

<?php

include 'conexion.php';

$stmt = $pdo->prepare ("SELECT l.id_lista, l.titulo 
	FROM listas l left join lista_usuario u on l.id_lista = u.id_lista 
	WHERE u.id_usuario='1' and l.archivada='1';");
$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $row) {
	$tabla = "<table id='tabla' border='1'><tr><th>";
	$tabla .= $row['titulo']."</th><th><form method='post' action='desarchivarLista.php'>
 			<input type='image' id='archivar'  src='../imagenes/desarchivar.png' name='id_lista' title='Desarchivar' value=$row[id_lista] >
 			</form><form method='post' action='eliminarLista.php'>
 			<input type='image' id='archivar'  src='../imagenes/eliminar.png' name='id_lista' title='Eliminar' value=$row[id_lista] >
 			</form></th></tr>";
	$stmt2 = $pdo->prepare("SELECT id_tarea, descripcion from tareas where id_lista = ".$row['id_lista'].";");
	$stmt2->execute();
	$result2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
	foreach ($result2 as $row2) {
		$tabla .= "<tr><td>".$row2['descripcion']."</td><td align='center'><form method='post' action='eliminarTarea.php'>
 			<input type='image' id='archivar'  src='../imagenes/eliminar.png' title='Eliminar' name='id_tarea' value=$row2[id_tarea] >
 			</form></tr>";
	}
	$tabla .= "</table><br/>";
	echo $tabla;
};

?>

</body>
</html>