<?php


function get_mirespuesta($idpregunta) {
	 require "../model/db.php";//te crea una conexion
	try{
		$sql = $conn->prepare("select * from respuesta INNER JOIN pregunta ON respuesta.idrespuesta = pregunta.idrespuesta where pregunta.idpregunta=:idpregunta");
		$sql->bindParam(":idpregunta",$idpregunta,PDO::PARAM_INT);
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
 
 function get_perfil($idviaje) {
	 require "../model/db.php";//te crea una conexion
	try{
		$sql = $conn->prepare("select * from viaje INNER JOIN usuario ON viaje.idautoincremental = usuario.idautoincremental where viaje.idviaje=:idviaje");
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
 
 
 ?>