<?php

function get_unviaje($idviaje){
	 require ("db.php");//te crea una conexion
	try{
		$sql = $conn->prepare("select * from viaje INNER JOIN origen ON  viaje.idOrigen = origen.idOrigen INNER JOIN destino ON viaje.idDestino = destino.idDestino where idviaje=:idviaje");
		$sql->bindParam(":idviaje",$idviaje,PDO::PARAM_INT);
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
 
 
 function get_estadopostulacion($idviaje) {
	 require "../model/db.php";//te crea una conexion
	try{
		$sql = $conn->prepare("select idautoincremental from estadopostulacion where idviaje=:idviaje");
		$sql->bindParam(":idviaje",$idviaje,PDO::PARAM_STR);
		$sql ->execute();
	
	/*while( $datos = $sql->fetch() )
    echo $datos[0]"ID".$datos[1].$datos[2].$datos[3] . '<br />';}*/

	$result= $sql->fetchAll([0][0]);
	
   }
   catch(PDOException $e) {
  $result= 'Error: ' . $e->getMessage();
  }
	return $result;
	 
 }
 
?>