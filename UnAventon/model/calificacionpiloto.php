<?php
 
 function comentario_calificacion($id, $idviaje, $comentario){
		
	require("db.php");
	try{
		$sql= $conn->prepare("INSERT INTO comentario
				(idautoincremental, idviaje, comentario ) 
				VALUES(?, ?, ?)" );
		
		
		

				
		$sql ->execute(array("$id","idviaje","comentario"));
	
    }catch(PDOException $e) {
			return 'Error: ' . $e->getMessage();
    }
	return true;
	
 }
 
 function get_id_comentario($id, $idviaje){
		
	require("db.php");
	try{
		$sql= $conn->prepare("select idcomentario from comentario where idautoincremental=? and idviaje=?" );
		
		
		

				
		$sql ->execute(array("$id","idviaje"));
		$result=$sql->fetchAll();
	
    }catch(PDOException $e) {
			return 'Error: ' . $e->getMessage();
    }
	return true;
	
 }
 
 function get_id_piloto($idviaje){
		
	require("db.php");
	try{
		$sql= $conn->prepare("select idautoincremental from usuario where idviaje=?" );
		
		
		

				
		$sql ->execute(array("idviaje"));
	
	
    }catch(PDOException $e) {
			return 'Error: ' . $e->getMessage();
    }
	return true;
	
 }
 
 
 
 
function calificacion_positiva($calificacion, $id, $idviaje, $idcomentario){
		
	require("db.php");
	try{
		$sql= $conn->prepare("INSERT INTO calificacionpiloto
				(puntaje, idcomentario, idautoincremental, idviaje) 
				VALUES(?, ?, ?, ?)" );
		
		
		

				
		$sql ->execute(array("$calificacion","idcomentario","id","idviaje"));
	
    }catch(PDOException $e) {
			return 'Error: ' . $e->getMessage();
    }
	return true;
	
 }
 
 
function positiva_calificacion($piloto){
 require "db.php";

try{

	$sql = $conn->prepare("UPDATE usuario SET califiacion=? WHERE idautoincremental=?");
	
	

	$sql->execute(array($calificacion + 1,"$piloto"));
	

} catch(PDOException $e){

	return "ERROR: " . $e->getMessage();

}



return true;

}

function negativa_calificacion($piloto){
 require "db.php";

try{

	$sql = $conn->prepare("UPDATE usuario SET califiacion=? WHERE idautoincremental=?");
	
	

	$sql->execute(array($calificacion - 1,"$piloto"));
	

} catch(PDOException $e){

	return "ERROR: " . $e->getMessage();

}



return true;

}

 ?>