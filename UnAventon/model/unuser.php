<?php
	 
	// esta funcion es la misma que el "perfil.php" obetiene todos los datos de un usuario donde el ID es igual al ID pasado por GET
 
 
 function get_user($idincremental){
	 require_once ("db.php");//te crea una conexion
	try{
		$sql = $conn->prepare("select * from usuario where idincremental=:idincremental");
		$sql->bindParam(":idincremental",$idincremental,PDO::PARAM_INT);
		$sql ->execute();
	
	/*while( $datos = $sql->fetch() )
    echo $datos[0]"ID".$datos[1].$datos[2].$datos[3] . '<br />';}*/

	$result= $sql->fetch();
	

   }
   catch(PDOException $e) {
  $result= 'Error: ' . $e->getMessage();
  }
	return $result;
	 
 }
?>