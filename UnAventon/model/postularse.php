<?php
 
	
  
 
  function nuevo_postulado($id,$idviaje,$estado){
		
	require("db.php");
	try{
		$sql= $conn->prepare("INSERT INTO estadopostulacion
				(idautoincremental, idviaje, estadopost, aceptado, rechazado) 
				VALUES(?, ?, ?, ?, ?)" );
		
		
		

				
		$sql ->execute(array("$id", "$idviaje", "$estado", 0, 0));
	
    }catch(PDOException $e) {
			return 'Error: ' . $e->getMessage();
    }
	return true;
	
 }
 
 

 

?>