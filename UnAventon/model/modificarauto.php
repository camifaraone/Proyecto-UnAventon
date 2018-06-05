<?php
 
 function get_vehiculo($id){
	 require_once ("db.php");//te crea una conexion
	try{
		$sql = $conn->prepare("select * from vehiculo where idautoincremental=:id"); 
		$sql->bindParam(":id",$id,PDO::PARAM_INT);   
		$sql ->execute();
	
	

	$result= $sql->fetch(); // los resultados de la consulta son guardados en un array 
	

   }
   catch(PDOException $e) {
  $result= 'Error: ' . $e->getMessage();
  }
	return $result;
	 
 }
 
 
 
 
 
 
 
 function modificar_vehiculo($marca,$modelo,$color,$detalles,$cantasientosdisp,$patente,$id){
 require "db.php";

try{

	$sql = $conn->prepare("UPDATE vehiculo SET marca=:marca, modelo=:modelo, color=:color, detalles=:detalles, cantasientosdisp=:cantasientosdisp, patente=:patente where idautoincremental=:id");
	
	$sql->bindParam(":marca",$marca, PDO::PARAM_STR,30);

	$sql->bindParam(":modelo",$modelo, PDO::PARAM_STR,30);

	$sql->bindParam(":color",$color , PDO::PARAM_STR,15);

	$sql->bindParam(":detalles",$detalles, PDO::PARAM_STR,30);

	$sql->bindParam(":cantasientosdisp",$cantasientosdisp, PDO::PARAM_INT,15);
	
	$sql->bindParam(":patente",$patente, PDO::PARAM_STR,7);

	$sql->execute();
	

} catch(PDOException $e){

	return "ERROR: " . $e->getMessage();

}



return true;

}
 
 
 
 
 
 
 
 
 
 
 
 

 ?>