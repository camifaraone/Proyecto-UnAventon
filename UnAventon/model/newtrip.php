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
?>