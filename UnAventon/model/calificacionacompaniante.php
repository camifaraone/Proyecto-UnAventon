<?php
 
 function comentario_calificacion($id, $idviaje, $comentario){
		
	require("db.php");
	try{
		$sql= $conn->prepare("INSERT INTO comentario
				(idautoincremental, idviaje, comentario ) 
				VALUES(?, ?, ?)" );
		
		
		

				
		$sql ->execute(array("$id","$idviaje","$comentario"));
	
    }catch(PDOException $e) {
			return 'Error: ' . $e->getMessage();
    }
	return true;
	
 }
 
  function get_id_comentario($id, $idviaje){
		
	require("db.php");
	try{
		$sql= $conn->prepare("select idcomentario from comentario where idautoincremental=? and idviaje=?" );
		
		$sql ->execute(array("$id", "$idviaje"));
	
	/*while( $datos = $sql->fetch() )
    echo $datos[0]"ID".$datos[1].$datos[2].$datos[3] . '<br />';}*/

	$result= $sql->fetchAll()[0][0];
	
   }
   catch(PDOException $e) {
  $result= 'Error: ' . $e->getMessage();
  }
	return $result;
	 
 }
 
 function get_calificacion($idacompaniante) {
	 require "../model/db.php";//te crea una conexion
	try{
		$sql = $conn->prepare("select calificacionacompaniante from usuario where idautoincremental=:idacompaniante");
		$sql->bindParam(":idacompaniante",$idacompaniante,PDO::PARAM_INT);
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
 
 
 
 
function calificacion_positiva($calificacion, $idcomentario, $idacompaniante, $idviaje){
		
	require("db.php");
	try{
		$sql= $conn->prepare("INSERT INTO calificacionacompaniante
				(puntaje, idcomentario, idautoincremental, idviaje) 
				VALUES(?, ?, ?, ?)" );
		
		
		

				
		$sql ->execute(array("$calificacion","$idcomentario","$idacompaniante","$idviaje"));
	
    }catch(PDOException $e) {
			return 'Error: ' . $e->getMessage();
    }
	return true;
	
 }
 
 
function positiva_calificacion($b,$idacompaniante){
 require "db.php";

try{

	$sql = $conn->prepare("UPDATE usuario SET calificacionacompaniante=? WHERE idautoincremental=?");
	
	

	$sql->execute(array("$b","$idacompaniante"));
	

} catch(PDOException $e){

	return "ERROR: " . $e->getMessage();

}



return true;

}

function negativa_calificacion($b,$idacompaniante){
 require "db.php";

try{

	$sql = $conn->prepare("UPDATE usuario SET calificacionacompaniante=? WHERE idautoincremental=?");
	
	

	$sql->execute(array("$b","$idacompaniante"));
	

} catch(PDOException $e){

	return "ERROR: " . $e->getMessage();

}



return true;

}

 ?>