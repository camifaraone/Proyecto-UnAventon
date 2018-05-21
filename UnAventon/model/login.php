<?php
 
	
  
  function ingresos($email, $contrasenia){
     require_once "../model/db.php";     
	try{
		$sql = $conn->prepare("select * from usuario where email=? and contrasenia=?");
		$sql->bindParam(1,$email);
	    $sql->bindParam(2,$contrasenia);
		$sql->execute();
		$result= $sql->fetchAll();

	}catch(PDOException $e) {
		$result= 'Error: ' . $e->getMessage();
	}
	return $result;
 }
 
  
 

?>