<?php

function aceptar($id,$idviaje){
 require "db.php";

try{

	$sql = $conn->prepare("UPDATE estadopostulacion SET rechazado=?, aceptado=? WHERE idautoincremental=? and idviaje=?");
	
	

	$sql->execute(array(0, 1, $id, $idviaje));
	

} catch(PDOException $e){

	return "ERROR: " . $e->getMessage();

}



return true;

}
function incrementarpostulacion($idviaje){
 require "db.php";

try{

	$sql = $conn->prepare("UPDATE viaje SET postulados=postulados + 1 WHERE idviaje=?");
	
	

	$sql->execute(array($idviaje));
	

} catch(PDOException $e){

	return "ERROR: " . $e->getMessage();

}



return true;

}



 

?>