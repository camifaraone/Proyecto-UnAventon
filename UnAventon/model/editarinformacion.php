<?php

function editar_usuario($nombre,$apellido,$nombreusuario,$email,$telefono,$fechanacimiento,$foto,$id){
 require_once ("db.php");
try{

	$sql = $conn->prepare("UPDATE usuario SET nombre=:nombre, apellido=:apellido, nombreusuario=:nombreusuario, email=:email, telefono=:telefono, fechanacimiento=:fechanacimiento, foto=:foto WHERE idautoincremental=:id");
	
	$sql->bindParam(":nombre",$nombre, PDO::PARAM_STR,30);

	$sql->bindParam(":apellido",$apellido, PDO::PARAM_STR,30);

	$sql->bindParam(":nombreusuario",$nombreusuario , PDO::PARAM_STR,15);

	$sql->bindParam(":email",$email, PDO::PARAM_STR,30);

	$sql->bindParam(":telefono",$telefono, PDO::PARAM_INT,15);
	
	$sql->bindParam(":fechanacimiento",$fechanacimiento, PDO::PARAM_STR,20);
	
	$sql->bindParam(":foto", $foto, PDO::PARAM_STR);

	$sql->execute();
	

} catch(PDOException $e){

	return "ERROR: " . $e->getMessage();

}



return true;

}

 
 
 
?>