<html> 
<head> 
<title>modificar LISTA</title> 
</head> 
<body>
<?php  
$id_lista = $_POST['id_lista']; 

include 'conexion.php';

$stmt = $pdo->prepare ("SELECT titulo FROM listas where id_lista = '$id_lista'");

$stmt->execute();

foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
    
      echo"    <form action='listaModificada.php' method='POST'>
          <input type='hidden' name='id_lista' value='$id_lista'>
          titulo: <input type='text' name='titulo' size='20' value= '$row[titulo]'><br>
          <input type='submit' value='Cambiar titulo'></form>";
           
};
?> 

</body> 

</html> 