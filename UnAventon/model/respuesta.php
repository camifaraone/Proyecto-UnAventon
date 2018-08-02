<?php


function realizarrespuesta($preg, $respuesta, $id, $idviaje){
		
	require("db.php");
	try{
		$sql= $conn->prepare("INSERT INTO respuesta
				(idpregunta, descripcionr, idautoincremental, idviaje) 
				VALUES(?, ?, ?, ?)" );
		
		
		

				
		$sql ->execute(array("$preg", "$respuesta", "$id", "$idviaje"));
	
    }catch(PDOException $e) {
			return 'Error: ' . $e->getMessage();
    }
	return true;
	
 }
 
 
 
 
 function get_pregunta($idviaje,$idpregun){
	require ("db.php");
	try{
		$sql = $conn->prepare("select idpregunta from pregunta where idviaje=:idviaje and idautoincremental=:idpregun");
		$sql->bindParam(":idviaje",$idviaje,PDO::PARAM_INT);
		$sql->bindParam(":idpregun",$idpregun,PDO::PARAM_INT);
		$sql ->execute();
	
	/*while( $datos = $sql->fetch() )
    echo $datos[0]"ID".$datos[1].$datos[2].$datos[3] . '<br />';}*/

	$result= $sql->fetchAll()[0][0];
	

   }catch(PDOException $e) {
  $result= 'Error: ' . $e->getMessage();
  }
	return $result;
 }
 
 function get_idrespuesta($preg){
	require ("db.php");
	try{
		$sql = $conn->prepare("select idrespuesta from respuesta where idpregunta=:preg");
		$sql->bindParam(":preg",$preg,PDO::PARAM_INT);
		
		$sql ->execute();
	
	/*while( $datos = $sql->fetch() )
    echo $datos[0]"ID".$datos[1].$datos[2].$datos[3] . '<br />';}*/

	$result= $sql->fetchAll()[0][0];
	

   }catch(PDOException $e) {
  $result= 'Error: ' . $e->getMessage();
  }
	return $result;
 }
 
 
function respuesta_realizada($idrespuesta,$preg){
 require "db.php";

try{

	$sql = $conn->prepare("UPDATE pregunta SET idrespuesta=? WHERE idpregunta=?");
	
	

	$sql->execute(array($idrespuesta,$preg));
	

} catch(PDOException $e){

	return "ERROR: " . $e->getMessage();

}



return true;

}
 
 
?>