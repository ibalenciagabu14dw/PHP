<?php
$nombre = $_GET['nombre'];
$longitud = $_GET['longitud'];
$latitud = $_GET['latitud'];
$tiempo = $_GET['tiempo'];
$correo = $_GET['correo'];
$action = $_GET['action'];

include 'userModel.php';

include 'userController.php';

include 'userView.php';

//initiate the triad

$userModel = new userModel($nombre,$correo,$longitud,$latitud,$tiempo);

$userController = new userController($userModel);

$userView = new userView($userController,$userModel);

if ($action == 'mostrar') {
	$userView->output();
}else{
	$userController->$action();
}

?>