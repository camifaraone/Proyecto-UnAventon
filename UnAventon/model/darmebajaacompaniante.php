<?php

function cancelar($id,$idviaje){

		require ("db.php");

//$conn = conectar(); //funcion que conecta con bd

		try{

		$gsent = $conn->prepare('DELETE FROM estadopostulacion WHERE idautoincremental=? and idviaje=?');

		
				
		$gsent->execute(array("$id","$idviaje"));




		//$result=$gsent->fetch();

		
				}

catch(PDOException $e){

echo "ERROR: " . $e->getMessage();
return false; //die();

}

//desconectar($conn);

return true;

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
 
 
 function disminuir_calificacion($d,$id){
 require "db.php";

try{

	$sql = $conn->prepare("UPDATE usuario SET calificacionacompaniante=? WHERE  idautoincremental=?");
	
	

	$sql->execute(array($d,$id));
	

} catch(PDOException $e){

	return "ERROR: " . $e->getMessage();

}



return true;

}
 
 
 function calificacion_negativa($calificacion, $id, $idpilotosistem, $idviaje, $motivo){
		
	require("db.php");
	try{
		$sql= $conn->prepare("INSERT INTO calificacionacompaniante
				(puntaje, idautoincremental, idpiloto, idviaje, motivo) 
				VALUES(?, ?, ?, ?, ?)" );
		
		
		

				
		$sql ->execute(array("$calificacion","$id","$idpilotosistem","$idviaje","$motivo"));
	
    }catch(PDOException $e) {
			return 'Error: ' . $e->getMessage();
    }
	return true;
	
 }
		
?>