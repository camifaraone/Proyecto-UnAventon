<?php
 
 function comentario_calificacion($idpiloto,$id , $idviaje, $comentario){
		
	require("db.php");
	try{
		$sql= $conn->prepare("INSERT INTO comentario
				(idautoincremental,idacompaniante, idviaje, comentario ) 
				VALUES(?, ?, ?, ?)" );
		
		
		

				
		$sql ->execute(array("$idpiloto","$id","$idviaje","$comentario"));
	
    }catch(PDOException $e) {
			return 'Error: ' . $e->getMessage();
    }
	return true;
	
 }
 
 function get_id_piloto($idviaje){
		
	require("db.php");
	try{
		$sql= $conn->prepare("select idautoincremental from viaje where idviaje=?" );
		
		$sql ->execute(array("$idviaje"));
	
	/*while( $datos = $sql->fetch() )
    echo $datos[0]"ID".$datos[1].$datos[2].$datos[3] . '<br />';}*/

	$result= $sql->fetchAll()[0][0];
	
   }
   catch(PDOException $e) {
  $result= 'Error: ' . $e->getMessage();
  }
	return $result;
		
 }
 
 
 
  function get_id_comentario($idpiloto,$id, $idviaje){
		
	require("db.php");
	try{
		$sql= $conn->prepare("select idcomentario from comentario where idautoincremental=? and idacompaniante=? and idviaje=?" );
		
		$sql ->execute(array("$idpiloto","$id", "$idviaje"));
	
	/*while( $datos = $sql->fetch() )
    echo $datos[0]"ID".$datos[1].$datos[2].$datos[3] . '<br />';}*/

	$result= $sql->fetchAll()[0][0];
	
   }
   catch(PDOException $e) {
  $result= 'Error: ' . $e->getMessage();
  }
	return $result;
	 
 }
 
 function get_calificacion($id) {
	 require "../model/db.php";//te crea una conexion
	try{
		$sql = $conn->prepare("select calificacionacompaniante from usuario where idautoincremental=:id");
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
 
 
 
 
function calificacion_positiva($calificacion, $idcomentario, $id, $idviaje){
		
	require("db.php");
	try{
		$sql= $conn->prepare("INSERT INTO calificacionacompaniante
				(puntaje, idcomentario, idautoincremental, idviaje) 
				VALUES(?, ?, ?, ?)" );
		
		
		

				
		$sql ->execute(array("$calificacion","$idcomentario","$id","$idviaje"));
	
    }catch(PDOException $e) {
			return 'Error: ' . $e->getMessage();
    }
	return true;
	
 }
 
 
function positiva_calificacion($b,$id){
 require "db.php";

try{

	$sql = $conn->prepare("UPDATE usuario SET calificacionacompaniante=? WHERE idautoincremental=?");
	
	

	$sql->execute(array("$b","$id"));
	

} catch(PDOException $e){

	return "ERROR: " . $e->getMessage();

}



return true;

}

function negativa_calificacion($b,$id){
 require "db.php";

try{

	$sql = $conn->prepare("UPDATE usuario SET calificacionacompaniante=? WHERE idautoincremental=?");
	
	

	$sql->execute(array("$b","$id"));
	

} catch(PDOException $e){

	return "ERROR: " . $e->getMessage();

}



return true;

}

 ?>