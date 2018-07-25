<?php


function realizarcomentario($id, $idviaje, $comentario){
		
	require("db.php");
	try{
		$sql= $conn->prepare("INSERT INTO comentario
				(idautoincremental, idviaje, comentario) 
				VALUES(?, ?, ?)" );
		
		
		

				
		$sql ->execute(array("$id", "$idviaje", "$comentario"));
	
    }catch(PDOException $e) {
			return 'Error: ' . $e->getMessage();
    }
	return true;
	
 }
 
 
 
 
 function get_viaje($id){
	require ("db.php");
	try{
		$sql = $conn->prepare("select * from viaje where idautoincremental=:id");
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