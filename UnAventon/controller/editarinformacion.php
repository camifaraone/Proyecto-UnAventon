<?php


require_once ("../model/perfil.php");
require_once ("../model/editarinformacion.php");
if(isset($_GET["idautoincremental"]) ){  

$usuario= get_perfil($_GET["idautoincremental"]);

}

$id= ($_GET["idautoincremental"]);


if(isset($_POST["editar"])){


if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['nombreusuario']) && !empty($_POST['email']) && !empty($_POST['telefono']) && !empty($_POST['fechanacimiento'])) {

	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$nombreusuario=$_POST['nombreusuario'];
	$email=$_POST['email'];
	$telefono=$_POST['telefono'];
	$fechanacimiento=$_POST['fechanacimiento'];
	

	
	
	
	$editar = editar_usuario($nombre,$apellido,$nombreusuario,$email,$telefono,$fechanacimiento,$id);
	var_dump($editar);
	header("Location: ../controller/perfil.php?idautoincremental=".$id);


} else {
	 $message = "Todos los campos deben estar completos";
}
}



include "../view/editarinformacion.html";
if (!empty($message)) {echo "<p class=\"error\">" . "Mensaje: ". $message . "</p>";} ?>	
