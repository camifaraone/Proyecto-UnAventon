<?php
 
 function get_vehiculo($id){
	 require ("db.php");//te crea una conexion
	try{
		$sql = $conn->prepare("select * from vehiculo where idvehiculo=:id"); 
		$sql->bindParam(":id",$id,PDO::PARAM_INT);   
		$sql ->execute();
	
	

	$result= $sql->fetch(); // los resultados de la consulta son guardados en un array 
	

   }
   catch(PDOException $e) {
  $result= 'Error: ' . $e->getMessage();
  }
	return $result;
	 
 }
 
 
 function get_id($id){
	 require ("db.php");//te crea una conexion
	try{
		$sql = $conn->prepare("select idautoincremental from vehiculo where idvehiculo=:id"); 
		$sql->bindParam(":id",$id,PDO::PARAM_INT);   
		$sql ->execute();
	
	

	$result= $sql->fetch()[0][0]; // los resultados de la consulta son guardados en un array 
	

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
 
 
 
 function modificar_vehiculo($marca,$modelo,$color,$detalles,$cantasientosdisp,$patente,$id){
 require ("db.php");

try{

	$sql = $conn->prepare("UPDATE vehiculo SET marca=?, modelo=?, color=?, detalles=?, cantasientosdisp=?, patente=? WHERE idvehiculo=?");
	
	

	$sql->execute(array($marca, $modelo, $color, $detalles, $cantasientosdisp, $patente, $id));
	

} catch(PDOException $e){

	return "ERROR: " . $e->getMessage();

}



return true;

}
 
 
 
 
 
 
 
 
 
 
 
 

 ?>