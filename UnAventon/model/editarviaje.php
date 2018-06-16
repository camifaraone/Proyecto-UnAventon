<?php
 function get_viaje($id){
	 require ("db.php");//te crea una conexion
	try{
		$sql = $conn->prepare("select * from viaje where idautoincremental=:id"); 
		$sql->bindParam(":id",$id,PDO::PARAM_INT);   
		$sql ->execute();
	
	

	$result= $sql->fetch(); // los resultados de la consulta son guardados en un array 
	

   }
   catch(PDOException $e) {
  $result= 'Error: ' . $e->getMessage();
  }
	return $result;
	 
 }
 ini_set ('display_errors', 'on');
 ini_set ('log_errors', 'on');
 ini_set ('display_startup_errors', 'on');
 ini_set ('error_reporting', E_ALL);

function editarviaje($fechaviaje, $monto, $duracion, $hora, $distancia, $origen, $destino, $observaciones,$id){
 require ("db.php");
try{

	$sql = $conn->prepare("UPDATE viaje SET fechaviaje=? ,monto=? ,duracion=? ,hora=?, distancia=?, origen=?, origen=?, destino=?, observaciones=? WHERE idautoincremental=?");
	
    
	$sql->execute(array($fechaviaje, $monto, $duracion, $hora, $distancia, $origen, $destino, $observaciones,$id));
	

} catch(PDOException $e){

	return "ERROR: " . $e->getMessage();

}



return true;

}

 
 
 
?>