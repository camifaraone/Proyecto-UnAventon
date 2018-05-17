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
 
 /* function get_id($nombreusuario) {
	 require_once ("db.php");//te crea una conexion
	try{
		$sql = $conn->prepare("SELECT idautoincremental FROM usuario WHERE nombreusuario=:nombreusuario");
		$sql->bindParam(":nombreusuario",$nombreusuario,PDO::PARAM_STR);
		$sql ->execute();
	
	/*while( $datos = $sql->fetch() )
    echo $datos[0]"ID".$datos[1].$datos[2].$datos[3] . '<br />';}*/
/*
	$result= $sql->fetchall[0]();
	

   }
   catch(PDOException $e) {
  $result= 'Error: ' . $e->getMessage();
  }
	return $result;
	 
 }
 
*/
?>