<?php

 ini_set ('display_errors', 'on');
 ini_set ('log_errors', 'on');
 ini_set ('display_startup_errors', 'on');
 ini_set ('error_reporting', E_ALL);

function editar_usuario($nombre,$apellido,$telefono,$fechanacimiento,$foto, $id){
 require ("db.php");
try{

	$sql = $conn->prepare("UPDATE usuario SET nombre=? ,apellido=? , telefono=?, fechanacimiento=?, foto=? WHERE idautoincremental=?");
	
    
	$sql->execute(array($nombre, $apellido, $telefono, $fechanacimiento, $foto, $id ));
	

} catch(PDOException $e){

	return "ERROR: " . $e->getMessage();

}



return true;

}

 
 
 
?>