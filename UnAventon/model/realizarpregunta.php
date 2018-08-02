<?php


function realizarcomentario($comentario, $id, $iddueño, $idviaje){
		
	require("db.php");
	try{
		$sql= $conn->prepare("INSERT INTO pregunta
				(descripcionp, idautoincremental, idduenio idviaje) 
				VALUES(?, ?, ?, ?)" );
		
		
		

				
		$sql ->execute(array("$comentario", "$id", "$iddueño", "$idviaje"));
	
    }catch(PDOException $e) {
			return 'Error: ' . $e->getMessage();
    }
	return true;
	
 }
 
 
  function get_id($idviaje) {
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

 
 
 
 
?>