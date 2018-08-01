<?php
 
 
 
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
 
 function get_calificacion($piloto) {
	 require "../model/db.php";//te crea una conexion
	try{
		$sql = $conn->prepare("select calificacion from usuario where idautoincremental=:piloto");
		$sql->bindParam(":piloto",$piloto,PDO::PARAM_INT);
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
 
 
 
 
function calificacion_positiva($calificacion,$piloto,$id, $idviaje,$comentario){
		
	require("db.php");
	try{
		$sql= $conn->prepare("INSERT INTO calificacionpiloto
				(puntaje, idautoincremental, idacompaniante, idviaje, comentario) 
				VALUES(?, ?, ?, ?, ?)" );
		
		
		

				
		$sql ->execute(array("$calificacion","$piloto","$id","$idviaje","$comentario"));
	
    }catch(PDOException $e) {
			return 'Error: ' . $e->getMessage();
    }
	return true;
	
 }
 
 
function positiva_calificacion($b,$piloto){
 require "db.php";

try{

	$sql = $conn->prepare("UPDATE usuario SET calificacion=? WHERE idautoincremental=?");
	
	

	$sql->execute(array("$b","$piloto"));
	

} catch(PDOException $e){

	return "ERROR: " . $e->getMessage();

}



return true;

}

function negativa_calificacion($b,$piloto){
 require "db.php";

try{

	$sql = $conn->prepare("UPDATE usuario SET calificacion=? WHERE idautoincremental=?");
	
	

	$sql->execute(array("$b","$piloto"));
	

} catch(PDOException $e){

	return "ERROR: " . $e->getMessage();

}



return true;

}

 ?>