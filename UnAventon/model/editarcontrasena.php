<?php

function editar_usuario( $contrasenia,$nuevacontrasenia,$confirmarcontrasenia,$id){
 require "db.php";

try{

	$sql = $conn->prepare("UPDATE usuario SET contrasenia=:contrasenia, confirmarcontrasenia=:confirmarcontrasenia where idautoincremental=:id");
	
	$sql->bindParam(":contrasenia",$contrasenia, PDO::PARAM_STR,30);

	$sql->bindParam(":confirmarcontrasenia",$confirmarcontrasenia, PDO::PARAM_STR,30);

	$sql->execute();
	

} catch(PDOException $e){

	return "ERROR: " . $e->getMessage();

}



return true;

}

 
 
 
?>