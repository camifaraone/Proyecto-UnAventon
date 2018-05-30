<?php

function editar_usuario($nombre,$apellido,$nombreusuario,$email,$telefono,$fechanacimiento,$id){
 require "db.php";

try{

	$sql = $conn->prepare("UPDATE usuario SET nombre=:nombre, apellido=:apellido, nombreusuario=:nombreusuario, email=:email, telefono=:telefono, fechanacimiento=:fechanacimiento where idautoincremental=:id");
	
	$sql->bindParam(":nombre",$nombre, PDO::PARAM_STR,30);

	$sql->bindParam(":apellido",$apellido, PDO::PARAM_STR,30);

	$sql->bindParam(":nombreusuario",$nombreusuario , PDO::PARAM_STR,15);

	$sql->bindParam(":email",$email, PDO::PARAM_STR,30);

	$sql->bindParam(":telefono",$telefono, PDO::PARAM_INT,15);
	
	$sql->bindParam(":fechanacimiento",$fechanacimiento, PDO::PARAM_STR,20);

	$sql->execute();
	

} catch(PDOException $e){

	return "ERROR: " . $e->getMessage();

}



return true;

}

 
 
 
?>