<?php

 ini_set ('display_errors', 'on');
 ini_set ('log_errors', 'on');
 ini_set ('display_startup_errors', 'on');
 ini_set ('error_reporting', E_ALL);

function editar_usuario($nombre,$apellido,$nombreusuario,$email,$telefono,$fechanacimiento,$id){
 require ("db.php");
try{

	$sql = $conn->prepare("UPDATE usuario SET nombre=? ,apellido=? ,nombreusuario=? ,email=?, telefono=?, fechanacimiento=? WHERE idautoincremental=?");
	
    
	$sql->execute(array($nombre, $apellido, $nombreusuario, $email, $telefono, $fechanacimiento, $id ));
	

} catch(PDOException $e){

	return "ERROR: " . $e->getMessage();

}



return true;

}

 
 
 
?>