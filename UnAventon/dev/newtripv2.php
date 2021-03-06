<?php


function newtrip($fechaviaje, $precioasiento, $duracion, $horasalida, $distancia,$observaciones,$idorigen,$iddestino,$idvehiculo,$id){
		
	require("db.php");
	
	try{
		$sql= $conn->prepare("INSERT INTO viaje
				(fecha, monto, duracion, hssalida, distancia, observaciones, idvehiculo, idOrigen, iddestino, idautoincremental) 
				VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)" );
		
		
		

		if chequearsuperposicion($fechaviaje,$duracion,$horasalida,$idvehiculo){	
			$sql ->execute(array($fechaviaje,$precioasiento,$duracion,$horasalida,$distancia,$observaciones,$idvehiculo,$idorigen,$iddestino,$id));
		} else {
			echo "<script type='text/javascript'>alert'El vehiculo está ocupado en ese momento, elija otro';</script>"
		}
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