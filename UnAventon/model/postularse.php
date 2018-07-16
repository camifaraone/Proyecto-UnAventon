<?php
 
	
  
 
  function nuevo_postulado($id,$idviaje){
		
	require("db.php");
	try{
		$sql= $conn->prepare("INSERT INTO estadopostulacion
				(idautoincremental, idviaje, aceptado, rechazado) 
				VALUES(?, ?, ?, ?)" );
		
		
		

				
		$sql ->execute(array("$id", "$idviaje", 0, 0));
	
    }catch(PDOException $e) {
			return 'Error: ' . $e->getMessage();
    }
	return true;
	
 }
 
 

 

?>