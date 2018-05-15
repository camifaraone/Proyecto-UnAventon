<?php
 
	
  
  function ingresos($user, $pass){
     require_once "../model/db.php";     
	try{
		$sql = $conn->prepare("select * from usuario where nombreusuario=? and contrasenia=?");
		$sql->bindParam(1,$user);
	    $sql->bindParam(2,$pass);
		$sql->execute();
		$result= $sql->fetchAll();

	}catch(PDOException $e) {
		$result= 'Error: ' . $e->getMessage();
	}
	return $result;
 }
 

?>