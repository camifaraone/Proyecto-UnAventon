<?php

function get_comentarios($idviaje,$id) {
	 require "../model/db.php";//te crea una conexion
	try{
		
		$sql = $conn->prepare("select usuario.nombre,usuario.apellido,usuario.email,calificacionpiloto.comentario,calificacionpiloto.puntaje from calificacionpiloto inner join usuario ON calificacionpiloto.idacompaniante = usuario.idautoincremental where calificacionpiloto.idviaje=:idviaje and calificacionpiloto.idautoincremental=:id");
		$sql->bindParam(":idviaje",$idviaje,PDO::PARAM_INT);
		$sql->bindParam(":id",$id,PDO::PARAM_INT);
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
 

 
 
 
 
 function get_coments($idviaje) {
	 require "../model/db.php";//te crea una conexion
	try{
		
		$sql = $conn->prepare("select coments from viaje where idviaje=:idviaje");
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