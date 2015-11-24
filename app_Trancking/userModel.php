<?php

class userModel {
    
    var $nombre;
    var $longitud;
    var $latitud;
    var $tiempo;
    var $correo;

	public function __construct($nombre,$correo,$longitud,$latitud,$tiempo){ 
      	 $this->nombre=$nombre; 
      	 $this->longitud=$longitud;
	     $this->latitud=$latitud;
	     $this->tiempo=$tiempo;
         $this->correo=$correo;
         } 


    public function add_user($nombre,$correo){
	    include 'conexion.php';
        $existe = false;
        $stmt = $pdo->prepare("SELECT nombre,correo from usuarios");
        $stmt->execute();
        $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        foreach ($usuarios as $row) {
          if ($row['nombre'] == $nombre) {
            if ($row['correo'] == $correo) {
              $existe = true;
            }
          }
        }

        if (!$existe) {
              $stmt2 = $pdo->prepare ("INSERT INTO usuarios (nombre,correo) VALUES(:nombre,:correo)");
              $stmt2->execute(array("nombre" => $nombre,"correo" => $correo));
          }
    }
    
     public function add_position($nombre,$longitud,$latitud,$tiempo){
	      include 'conexion.php';
       $stmt = $pdo->prepare ("SELECT id_usuario FROM usuarios  where nombre = '$nombre'");
       $stmt->execute();
       $contenedor = $stmt->fetch(PDO::FETCH_ASSOC);
       $stmt2 = $pdo->prepare ("INSERT INTO posiciones (id_usuario,longitud,latitud,tiempo) VALUES(:id_usuario, :longitud, :latitud, :tiempo )");
	     $stmt2->execute(array("id_usuario" => $contenedor['id_usuario'],"longitud" => $longitud,"latitud" => $latitud,"tiempo" => $tiempo));
    }
}


?>