<?php


function registrar_usuario($nombreusuario,$email,$nombre,$apellido,$telefono,$fechanacimiento,$contrasenia,$confirmarcontrasenia){
		
	require_once ("db.php");
	
	try{
		$sql= $conn->prepare("INSERT INTO usuario
				(nombreusuario, email, nombre,apellido,telefono,fechnacimiento,contrasenia,confirmarcontrasenia) 
				VALUES(:nombreusuario,:email, :nombre, :apellido, :telefono, :fechanacimiento, :contrasenia, :confirmarcontrasenia)" );
		$sql->bindParam(":nombreusuario",$nombreusuario,PDO::PARAM_STR,100);
		$sql->bindParam(":email",$email,PDO::PARAM_STR,100);
		$sql->bindParam(":nombre",$nombre,PDO::PARAM_STR,100);
		$sql->bindParam(":apellido",$apellido,PDO::PARAM_STR,8);	
		$sql->bindParam(":telefono",$telefono,PDO::PARAM_INT,15);
		$sql->bindParam(":fechanacimiento",$fechanacimiento,PDO::PARAM_STR);
		$sql->bindParam(":contrasenia",$contrasenia,PDO::PARAM_STR,8);
		$sql->bindParam(":confirmarcontrasenia",$confirmarcontrasenia,PDO::PARAM_STR,8);
				
		$sql ->execute();

    }catch(PDOException $e) {
			return 'Error: ' . $e->getMessage();
    }
	return true;
 }

 function comprobar_usuario($nombreusuario, $contrasenia)
 {
	  require_once ("db.php");
	try{
		$sql = $conn->prepare("select * from usuario where nombreusuario=:nombreusuario and contrasenia=:contrasenia");
		$sql->bindParam(":nombreusuario",$nombreusuario,PDO::PARAM_STR);
		$sql->bindParam(":contrasenia",$contrasenia,PDO::PARAM_STR);
		$sql ->execute();
	 
	}catch(PDOException $e) {
			return 'Error: ' . $e->getMessage();
    }
	return true;	 
	 
 
 
 }

?>