<?php
 
	
  
 
  function restaurar_pass($pass,$email){
 require "db.php";

try{

	$sql = $conn->prepare("UPDATE usuario SET contrasenia=?, confirmarcontrasenia=? WHERE email=?");
	
	

	$sql->execute(array($pass, $pass, $email));
	

} catch(PDOException $e){

	return "ERROR: " . $e->getMessage();

}



return true;

}
 

?>