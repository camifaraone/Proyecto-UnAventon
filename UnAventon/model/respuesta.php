<?php


function realizarrespuesta($id, $idcomentario, $respuesta){
		
	require("db.php");
	try{
		$sql= $conn->prepare("INSERT INTO respuesta
				(idautoincremental, idcomentario, respuesta) 
				VALUES(?, ?, ?)" );
		
		
		

				
		$sql ->execute(array("$id", "$idcomentario", "$respuesta"));
	
    }catch(PDOException $e) {
			return 'Error: ' . $e->getMessage();
    }
	return true;
	
 }
 
 
 
 
 function get_pregunta($id){
	require ("db.php");
	try{
		$sql = $conn->prepare("select * from comentario where idautoincremental=:id");
		$sql->bindParam(":id",$id,PDO::PARAM_INT);
		$sql ->execute();
	
	/*while( $datos = $sql->fetch() )
    echo $datos[0]"ID".$datos[1].$datos[2].$datos[3] . '<br />';}*/

	$result= $sql->fetchAll();
	

   }catch(PDOException $e) {
  $result= 'Error: ' . $e->getMessage();
  }
	return $result;
 }
 
 
 
 
 
 
?>