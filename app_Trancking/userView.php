<?php



class userView {

    private $userModel;
    private $userController;

    

    public function __construct($userController,$userModel) {

        $this->userController = $userController;
        $this->userModel = $userModel;
       


    }

    

    public function output() {

       include "conexion.php";
        echo "<html>";
        echo "<head>";
        echo "</head>";
        echo "<body>";
        echo "<table border=1>";
        $stmt = $pdo->prepare("SELECT id_usuario from usuarios where nombre = '".$this->userModel->nombre."'");
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
            echo " <td>".$row[id_usuario]."</td>";
            echo " <td>".$row[longitud]."</td>";
            echo " <td>".$row[latitud]."</td>";
            echo " <td>".$row[tiempo]."</td>";
            echo " </tr>";
            
        }
        
        echo "</table>";
        echo "</body>";
        echo "</html>";

    }

    

}





?>