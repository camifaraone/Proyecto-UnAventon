<?php

function cancelar($id,$idviaje){
 require "db.php";

try{

	$sql = $conn->prepare("UPDATE estadopostulacion SET rechazado=?, aceptado=? WHERE idautoincremental=? and idviaje=?");
	
	

	$sql->execute(array(1, 0, $id, $idviaje));
	

} catch(PDOException $e){

	return "ERROR: " . $e->getMessage();

}



return true;

}


  
 

?>