<?php

function aceptar($id){
 require "db.php";

try{

	$sql = $conn->prepare("UPDATE estadopostulacion SET rechazado=?, aceptado=? WHERE idautoincremental=?");
	
	

	$sql->execute(array(0, 1, $id));
	

} catch(PDOException $e){

	return "ERROR: " . $e->getMessage();

}



return true;

}
function incrementarpostulacion($idviaje){
 require "db.php";

try{

	$sql = $conn->prepare("UPDATE viaje SET postulados=postulados + 1 WHERE idviaje=?");
	
	

	$sql->execute(array($idviaje));
	

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
		$sql = $conn->prepare("select idviaje from viaje where idautoincremental=:id");
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