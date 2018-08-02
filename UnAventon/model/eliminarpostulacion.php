<?php
function calificacion_negativa($calificacion, $id, $idpilotosistem, $idviaje, $motivo){
		
	require("db.php");
	try{
		$sql= $conn->prepare("INSERT INTO calificacionpiloto
				(puntaje, idautoincremental, idacompaniante, idviaje, motivo) 
				VALUES(?, ?, ?, ?, ?)" );
		
		
		

				
		$sql ->execute(array("$calificacion","$id","$idpilotosistem","$idviaje","$motivo"));
	
    }catch(PDOException $e) {
			return 'Error: ' . $e->getMessage();
    }
	return true;
	
 }
 
function cancelar($id,$idviaje){
 require "db.php";

try{

	$sql = $conn->prepare("UPDATE estadopostulacion SET rechazado=?, aceptado=? WHERE idautoincremental=? and idviaje=?");
	
	

	$sql->execute(array(1, 0, $id, $idviaje));
	

} catch(PDOException $e){

	return "ERROR: " . $e->getMessage();

}



return true;

}

function disminuir_postulantes($d,$idviaje){
 require "db.php";

try{

	$sql = $conn->prepare("UPDATE viaje SET postulados=? WHERE  idviaje=?");
	
	

	$sql->execute(array($d,$idviaje));
	

} catch(PDOException $e){

	return "ERROR: " . $e->getMessage();

}



return true;

}

function get_postulados($idviaje) {
	 require "../model/db.php";//te crea una conexion
	try{
		
		$sql = $conn->prepare("select postulados from viaje where idviaje=:idviaje");
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

 function get_id_piloto($idviaje) {
	 require "../model/db.php";//te crea una conexion
	try{
		
		$sql = $conn->prepare("select idautoincremental from viaje where idviaje=:idviaje");
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
 
 function get_calificacion_piloto($x) {
	 require "../model/db.php";//te crea una conexion
	try{
		
		$sql = $conn->prepare("select calificacion from usuario where idautoincremental=:x");
		$sql->bindParam(":x",$x,PDO::PARAM_INT);
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
 
 function bajar_calificacion($dis, $x){
 require "db.php";

try{

	$sql = $conn->prepare("UPDATE usuario SET calificacion=? WHERE  idautoincremental=?");
	
	

	$sql->execute(array($dis,$x));
	

} catch(PDOException $e){

	return "ERROR: " . $e->getMessage();

 }}

?>