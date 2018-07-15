<?php

ini_set ('display_errors', 'on');
ini_set ('log_errors', 'on');
ini_set ('display_startup_errors', 'on');
ini_set ('error_reporting', E_ALL);

function comprobar($email)
{
	require ("db.php");
	try{
		
		$sql = $conn->prepare("select * from usuario where email=:email");
		$sql->bindParam(":email",$email,PDO::PARAM_STR);
		
		$sql ->execute();
		$result=$sql->fetch();
		
	}
	catch(PDOException $e) {
		return 'Error: ' . $e->getMessage();
	}
	return $result;	 
	
	
	
}

function editar_usuario($nombre,$apellido,$nombreusuario,$email,$telefono,$fechanacimiento,$foto, $id){
	require ("db.php");
	try{

		$sql = $conn->prepare("UPDATE usuario SET nombre=? ,apellido=? ,nombreusuario=? ,email=?, telefono=?, fechanacimiento=?, foto=? WHERE idautoincremental=?");
		
		
		$sql->execute(array($nombre, $apellido, $nombreusuario, $email, $telefono, $fechanacimiento, $foto, $id ));
		

	} catch(PDOException $e){

		return "ERROR: " . $e->getMessage();

	}



	return true;

}




?>