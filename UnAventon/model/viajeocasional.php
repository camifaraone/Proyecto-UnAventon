<?php


function newtrip($fechaviaje, $preciototal, $duracion, $horasalida, $cantasientos,$idorigen,$iddestino,$observaciones,$idvehiculo,$id,$estadopago){
		
	require("db.php");
	
	try{
		$sql= $conn->prepare("INSERT INTO viaje
				(fecha, monto, duracion, hssalida, cantasientos, idOrigen, idDestino, observaciones, idvehiculo,  idautoincremental, estadopago) 
				VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)" );
		
		
		

				
		$sql ->execute(array("$fechaviaje", "$preciototal", "$duracion", "$horasalida", "$cantasientos","$idorigen","$iddestino","$observaciones","$idvehiculo","$id", "$estadopago"));
	
    }catch(PDOException $e) {
			return 'Error: ' . $e->getMessage();
    }
	return true;
	
 }
 
 
 
 
 function get_origen() {
	 require "../model/db.php";//te crea una conexion
	try{
		$sql = $conn->prepare("select * from origen");
		$sql ->execute();
	
	/*while( $datos = $sql->fetch() )
    echo $datos[0]"ID".$datos[1].$datos[2].$datos[3] . '<br />';}*/

	$result= $sql->fetchAll();
	
   }
   catch(PDOException $e) {
  $result= 'Error: ' . $e->getMessage();
  }
	return $result;
	 
 }
 
 
 function get_destino() {
	 require "../model/db.php";//te crea una conexion
	try{
		$sql = $conn->prepare("select * from destino ");
		$sql ->execute();
	
	/*while( $datos = $sql->fetch() )
    echo $datos[0]"ID".$datos[1].$datos[2].$datos[3] . '<br />';}*/

	$result= $sql->fetchAll();
	
   }
   catch(PDOException $e) {
  $result= 'Error: ' . $e->getMessage();
  }
	return $result;
	 
 }
 
 
 
 function get_vehiculo($id){
	require ("db.php");
	try{
		$sql = $conn->prepare("select * from vehiculo where idautoincremental=:id");
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