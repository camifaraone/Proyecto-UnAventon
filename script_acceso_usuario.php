<?php
	if(!session_id()){
		session_start();
	}
	include ('usuario.php');
	include('conexion.php');
	$user= new usuario; //instancia de una clase
	$conex=conectar();
	$user->ingresar($_POST['email'],$_POST['contrasenia'],$conex);


?>
