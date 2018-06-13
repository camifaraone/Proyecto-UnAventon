<?php

function editar_contrasenia($contrasenia,$confirmarcontrasenia,$id){
 require "db.php";

try{

	$sql = $conn->prepare("UPDATE usuario SET contrasenia=?, confirmarcontrasenia=? WHERE idautoincremental=?");
	
	

	$sql->execute(array($contrasenia, $confirmarcontrasenia, $id));
	

} catch(PDOException $e){

	return "ERROR: " . $e->getMessage();

}



return true;

}

 
 
 
?>