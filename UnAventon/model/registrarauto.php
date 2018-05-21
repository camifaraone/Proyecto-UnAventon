<?php


function registrar_vehiculo($marca,$color,$detalles,$cantasientosdisp,$modelo,$patente,$id){
		
	require_once ("db.php");
	
	try{ 
	
	die();
		$sql= $conn->prepare("INSERT INTO vehiculo
				(marca, color, detalles,cantasientosdisp,modelo,patente,idautoincremental) 
				VALUES(:marca,:color, :detalles, :cantasientosdisp, :modelo, :patente, :id)" );
		$sql->bindParam(":marca",$marca,PDO::PARAM_STR,15);
		$sql->bindParam(":color",$color,PDO::PARAM_STR,15);
		$sql->bindParam(":detalles",$detalles,PDO::PARAM_STR,100);
		$sql->bindParam(":cantasientosdisp",$cantasientosdisp,PDO::PARAM_INT,10);	
		$sql->bindParam(":modelo",$modelo,PDO::PARAM_STR);
		$sql->bindParam(":patente",$patente,PDO::PARAM_STR);
		$sql->bindParam(":id",$id,PDO::PARAM_INT,100);
	
			
		$sql ->execute();
		

    }catch(PDOException $e) {
			return 'Error: ' . $e->getMessage();
    }
	return true;
	
 }

 
 
 

?>
 
 

