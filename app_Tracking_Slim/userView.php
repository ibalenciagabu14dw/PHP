<?php
class userView {
    var $nombre,$correo;
    
    public function __construct($nombre,$correo) {
        $this->$nombre = $nombre;
        $this->$correo = $correo;
    }
public function output2($nombre,$correo){
        
        include "conexion.php";
        echo "<html>";
        echo "<head>";
        echo "<style type='text/css'>
            html, body { height: 100%; margin: 0; padding: 0; }
            #map { height: 100%; }";
        echo "</style>";
        echo "</head>";
        echo "<body>";
        echo "<div id='map'></div>";
        
            $stmt = $pdo->prepare("SELECT id_usuario from usuarios where nombre = '$nombre' and correo = '$correo'");
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            $cont = "SELECT id_usuario,longitud,latitud,tiempo FROM posiciones where id_usuario= ".$user['id_usuario'];
            $stmt2 = $pdo->prepare($cont);
            $stmt2->execute();

             echo "<script type='text/javascript'>
            
            function initMap() {
                var image = '../streetview-icon.png';
                var myLatLng = {lat: 43.323679, lng: -1.973462};
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 16,
                    center: myLatLng
                });";
                $contador =1;
                foreach($stmt2->fetchAll(PDO::FETCH_ASSOC) as $row){
                echo "var marker = new google.maps.Marker({
                position: {lat: $row[latitud], lng: $row[longitud]},
                map: map,
                title: 'posicion a las: $row[tiempo]',
                icon:image 
                });";
                $contador++;
                };
                echo "}
             </script>;";
        
        echo "<script async defer src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDdQxcqtVk98BQatJ-BzyIIaHyQqCLwv34&callback=initMap'>";
        echo "</script>";
        echo "</body>";
        echo "</html>";     
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