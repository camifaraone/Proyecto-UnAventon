<?php
 
	
  
 
  function get_id($email) {
	 require "../model/db.php";//te crea una conexion
	try{
		$sql = $conn->prepare("select idautoincremental from usuario where email=:email");
		$sql->bindParam(":email",$email,PDO::PARAM_STR);
		$sql ->execute();
	
	/*while( $datos = $sql->fetch() )
    echo $datos[0]"ID".$datos[1].$datos[2].$datos[3] . '<br />';}*/

	$result= $sql->fetchAll()[0][0];
	
   }
   catch(PDOException $e) {
  $result= 'Error: ' . $e->getMessage();
  }
	return $result;
	 
 }
 

?>