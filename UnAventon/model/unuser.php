<?php
	 
	// esta funcion obetiene el ID del vehiculo de la persona que esta logueada
 
 
 function get_user(){
	 require ("db.php");//te crea una conexion
	try{
		$sql = $conn->prepare("select * from vehiculo ");
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