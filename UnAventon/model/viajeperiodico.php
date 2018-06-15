<?php


function newtrip($fechaviaje, $fechaviaje, $dias, $preciototal, $horasalida, $observaciones,$idorigen,$iddestino,$idvehiculo,$id){
		
	require("db.php");
	
	try{
		$sql= $conn->prepare("INSERT INTO viaje
				(fecha, fecha, dias, monto, hssalida, observaciones, idOrigen, iddestino, idvehiculo, idautoincremental) 
				VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)" );
		
		
		

				
		$sql ->execute(array($fechaviaje, $fechaviaje, $dias, $preciototal, $horasalida, $observaciones,$idorigen,$iddestino,$idvehiculo,$id));
	
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
 
 
 function get_idOrigen($O){
	require ("db.php");
	try{
		$sql = $conn->prepare("select idOrigen from origen where ciudadOrigen=:O");
		$sql->bindParam(":O",$O,PDO::PARAM_STR);
		$sql ->execute();
	
	/*while( $datos = $sql->fetch() )
    echo $datos[0]"ID".$datos[1].$datos[2].$datos[3] . '<br />';}*/

	$result= $sql->fetchAll();
	

   }catch(PDOException $e) {
  $result= 'Error: ' . $e->getMessage();
  }
	return $result;
 }
 
 
 
 function get_idDestino($D){
	require ("db.php");
	try{
		$sql = $conn->prepare("select idDestino from destino where ciudadDestino=:D");
		$sql->bindParam(":D",$D,PDO::PARAM_STR);
		$sql ->execute();
	
	/*while( $datos = $sql->fetch() )
    echo $datos[0]"ID".$datos[1].$datos[2].$datos[3] . '<br />';}*/

	$result= $sql->fetchAll();
	

   }catch(PDOException $e) {
  $result= 'Error: ' . $e->getMessage();
  }
	return $result;
 }
 
 
 
 function get_idVehiculo($V){
	require ("db.php");
	try{
		$sql = $conn->prepare("select idvehiculo from vehiculo where marca=:V");
		$sql->bindParam(":v",$V,PDO::PARAM_STR);
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