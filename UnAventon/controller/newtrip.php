<?php


require_once "../model/newtip.php";


if(isset($_POST["finishtrip"])){


if(!empty($_POST['tipo']) && !empty($_POST['fecha']) && !empty($_POST['monto']) && !empty($_POST['duración']) && !empty($_POST['hssalida']) && !empty($_POST['comision']) && !empty($_POST['distancia'])  && !empty($_POST['observaciones']) && !empty($_POST['estadopago'])) {
	$nombreusuario=$_POST['nombreusuario'];
	$email=$_POST['email'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$telefono=$_POST['telefono'];
	$fechanacimiento=$_POST['fechanacimiento'];
	$contrasenia=$_POST['contrasenia'];
	$confirmarcontrasenia=$_POST['confirmarcontrasenia'];
	
	
	
	$valor = registrar_usuario($nombreusuario,$email,$nombre,$apellido,$telefono,$fechanacimiento,$contrasenia,$confirmarcontrasenia);
	header("Location: ../controller/login.php");


} else {
	 $message = "Todos los campos no deben de estar vacios!";
}
}


*/



include "../view/newtrip.html";
	

?>