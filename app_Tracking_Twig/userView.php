<?php

class userView {
    var $nombre,$correo;
    
    public function __construct($nombre,$correo) {
        $this->$nombre = $nombre;
        $this->$correo = $correo;
    }
    public function outputMap($nombre,$correo){
        require_once 'vendor/autoload.php';

        Twig_Autoloader::register();

        $loader = new Twig_Loader_Filesystem('templates');
        $twig = new Twig_Environment($loader);
        include "conexion.php";
        include "puntos.php";
        
            $stmt = $pdo->prepare("SELECT id_usuario from usuarios where nombre = '$nombre' and correo = '$correo'");
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            $cont = "SELECT id_usuario,longitud,latitud,tiempo FROM posiciones where id_usuario= ".$user['id_usuario'];
            $stmt2 = $pdo->prepare($cont);
            $stmt2->execute();
            $puntosArr = array();

            foreach ($stmt2->fetchAll(PDO::FETCH_ASSOC) as $row) {
                $cont2 = new puntos($row['latitud'],$row['longitud'],$row['tiempo']);
                array_push($puntosArr,$cont2);
            }

           echo $twig->render('index.html', array('puntosArr' => $puntosArr));

    }
    
    public function output($nombre,$correo) {
        include "conexion.php";
        echo "<html>";
        echo "<head>";
        echo "</head>";
        echo "<body>";
        echo "<table border=1>";
        $stmt = $pdo->prepare("SELECT id_usuario from usuarios where nombre = '$nombre' and correo = '$correo'");
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        $cont = "SELECT id_usuario,longitud,latitud,tiempo FROM posiciones where id_usuario= ".$user['id_usuario'];
        $stmt2 = $pdo->prepare($cont);
        $stmt2->execute();
        
        foreach($stmt2->fetchAll(PDO::FETCH_ASSOC) as $row){
            
            echo "<tr>";
            echo "<th>ID_USUARIO</th>";
            echo "<th>LONGITUD</th>";
            echo "<th>LATITUD</th>";
            echo "<th>TIEMPO</th>";
            echo "</tr>";
            echo " <tr>";
            echo " <td>".$row['id_usuario']."</td>";
            echo " <td>".$row['longitud']."</td>";
            echo " <td>".$row['latitud']."</td>";
            echo " <td>".$row['tiempo']."</td>";
            echo " </tr>";
            
        }
        
        echo "</table>";
        echo "</body>";
        echo "</html>";
    }
}
?>