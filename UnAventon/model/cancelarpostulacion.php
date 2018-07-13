<?php

function cancelar($id){
 require "db.php";

try{

	$sql = $conn->prepare("UPDATE estadopostulacion SET rechazado=?, aceptado=? WHERE idautoincremental=?");
	
	

	$sql->execute(array(1, 0, $id));
	

} catch(PDOException $e){

	return "ERROR: " . $e->getMessage();

}



return true;

}


  function get_id($id) {
	 require "../model/db.php";//te crea una conexion
	try{
		$sql = $conn->prepare("select viaje.idautoincremental from viaje INNER JOIN estadopostulacion ON viaje.idviaje = estadopostulacion.idviaje where estadopostulacion.idautoincremental=:id");
		$sql->bindParam(":id",$id,PDO::PARAM_INT);
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

 function get_id2($id) {
	 require "../model/db.php";//te crea una conexion
	try{
		$sql = $conn->prepare("select idviaje from estadopostulacion where idautoincremental=:id");
		$sql->bindParam(":id",$id,PDO::PARAM_INT);
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