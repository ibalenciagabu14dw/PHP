<?php
	require 'vendor/autoload.php';

	include 'userModel.php';

	include 'userView.php';	

	//require 'Slim/Slim.php';
	Slim\Slim::registerAutoloader();
	$app = new \Slim\Slim();
	$app->config('debug', false);

	$app->post('/add', function () use ($app) {
		$nombre = $app->request->post('nombre');
		$longitud = $app->request->post('longitud');
		$latitud = $app->request->post('latitud');
		$tiempo = $app->request->post('tiempo');
		$correo = $app->request->post('correo');
		$userModel = new userModel($nombre,$correo,$longitud,$latitud,$tiempo);
		$userView = new userView($nombre,$correo);
		$userModel->add_user($nombre,$correo);
		$userModel->add_position($nombre,$correo,$longitud,$latitud,$tiempo);
		$userView->output($nombre,$correo);

	});

	$app->post('/view', function () use ($app) {
		$nombre = $app->request->post('nombre');
		$correo = $app->request->post('correo');
		$userView = new userView($nombre,$correo);
		$userView->output2($nombre,$correo);
	});

/*$app->get('/add/:nombre/:correo/:latitud/:longitud/:tiempo', function ($nombre,$correo,$latitud,$longitud,$tiempo){
	$userModel = new userModel($nombre,$correo,$longitud,$latitud,$tiempo);
	$userModel->add_user($nombre,$correo);
	$userModel->add_position($nombre,$longitud,$latitud,$tiempo);
});

$app->get('/view/:nombre/:correo', function ($nombre,$correo){
	$userView = new userView($nombre,$correo);
    $userView->output($nombre,$correo);
});*/
	
	$app->run();
?>