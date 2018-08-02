<?php


require_once ("../model/perfil.php");
require_once ("../model/editarinformacion.php");
if(isset($_GET["idautoincremental"]) ){  

$usuario= get_perfil($_GET["idautoincremental"]);

}

$id= ($_GET["idautoincremental"]);


if(isset($_POST["editar"])){


if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['telefono']) && !empty($_POST['fechanacimiento']) && (!empty($_POST['foto']) || empty($_POST['foto']))) {

	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	
	
	$telefono=$_POST['telefono'];
	$fechanacimiento=$_POST['fechanacimiento'];
	$foto=$_POST['foto'];
	
	

	if (empty($_POST['foto'])){
		$foto="../img/img6.png";
	}
	
	
	$editar = editar_usuario($nombre,$apellido, $telefono,$fechanacimiento,$foto, $id);
	var_dump($editar);
	echo "<html><script> alert('Usuario modificado');</script></html>"; 
		echo "<html><script> document.location.href='../controller/perfil.php?idautoincremental=".$id."';</script></html>";
	


} else {
	 $message = "Todos los campos deben estar completos";
}
}



include "../view/editarinformacion.html";
if (!empty($message)) {echo "<p class=\"error\">" . "Mensaje: ". $message . "</p>";} ?>	
