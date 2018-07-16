<?php

function get_postulantes($idviaje) {
	 require "../model/db.php";//te crea una conexion
	try{
		
		$sql = $conn->prepare("select * from estadopostulacion INNER JOIN usuario ON  estadopostulacion.idautoincremental = usuario.idautoincremental INNER JOIN viaje ON estadopostulacion.idviaje = viaje.idviaje  where estadopostulacion.idviaje=:idviaje");
		$sql->bindParam(":idviaje",$idviaje,PDO::PARAM_INT);
		$sql ->execute();
	
	/*while( $datos = $sql->fetch() )
    echo $datos[0]"ID".$datos[1].$datos[2].$datos[3] . '<br />';}*/

	$result= $sql->fetchAll();
	
   }
   catch(PDOException $e) {
  $result= 'Error: ' . $e->getMessage();
  }
	return $result;
	 
 }
 

 
 
 function get_asientos($idviaje) {
	 require "../model/db.php";//te crea una conexion
	try{
		
		$sql = $conn->prepare("select cantasientos from viaje where idviaje=:idviaje");
		$sql->bindParam(":idviaje",$idviaje,PDO::PARAM_INT);
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