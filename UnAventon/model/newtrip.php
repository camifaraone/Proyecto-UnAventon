<?php


function newtrip($tipo, $fecha, $monto, $duracion, $hssalida, $distancia, $ciudadOrigen, $ciudadDestino, $observaciones, $nombre){
		
	require("db.php");
	
	try{
		$sql= $conn->prepare("INSERT INTO viaje
				(tipo, fecha, monto, duracion, hssalida, distancia) 
				VALUES(:tipo, :fecha, :monto, :duracion, :hssalida, :distancia)" );
		$sql->bindParam(":tipo",$tipo,PDO::PARAM_STR);
		$sql->bindParam(":fecha",$fecha,PDO::PARAM_STR);
		$sql->bindParam(":monto",$monto,PDO::PARAM_INT);
		$sql->bindParam(":duracion",$duracion,PDO::PARAM_INT);	
		$sql->bindParam(":hssalida",$hssalida,PDO::PARAM_INT);
		$sql->bindParam(":distancia",$distancia,PDO::PARAM_STR);
		$sql->bindParam(":ciudadOrigen",$ciudadOrigen,PDO::PARAM_STR);
		$sql->bindParam(":ciudadDestino",$ciudadDestino,PDO::PARAM_STR);
		$sql->bindParam(":nombre",$nombre,PDO::PARAM_STR);
		

				
		$sql ->execute();
	
    }catch(PDOException $e) {
			return 'Error: ' . $e->getMessage();
    }
	return true;
	
 }
 
 
 
 
 function get_origen() {
	 require "../model/db.php";//te crea una conexion
	try{
		$sql = $conn->prepare("select * from origen INNER JOIN viaje ON origen.idOrigen = viaje.idOrigen");
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
		$sql = $conn->prepare("select * from destino INNER JOIN viaje ON destino.idDestino = viaje.idDestino");
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
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
?>