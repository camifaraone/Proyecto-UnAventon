<?php


function registrar_vehiculo($marca,$color,$detalles,$cantasientosdisp,$modelo,$patente){
		
	require_once ("db.php");
	
	try{ 
		$sql= $conn->prepare("INSERT INTO vehiculo
				(marca, color, detalles,cantasientosdisp,modelo,patente) 
				VALUES(:marca,:color, :detalles, :cantasientosdisp, :modelo, :patente)" );
		$sql->bindParam(":marca",$marca,PDO::PARAM_STR,15);
		$sql->bindParam(":color",$color,PDO::PARAM_STR,15);
		$sql->bindParam(":detalles",$detalles,PDO::PARAM_STR,100);
		$sql->bindParam(":cantasientosdisp",$cantasientosdisp,PDO::PARAM_INT,10);	
		$sql->bindParam(":modelo",$modelo,PDO::PARAM_STR);
		$sql->bindParam(":patente",$patente,PDO::PARAM_STR);
				
		$sql ->execute();
	

    }catch(PDOException $e) {
			return 'Error: ' . $e->getMessage();
    }
	return true;
	
 }

 
 
 
	 
	// esta funcion es la misma que el "perfil.php" obetiene todos los datos de un usuario donde el ID es igual al ID pasado por GET
 
 
 function get_user($email){
	 require_once ("db.php");//te crea una conexion
	try{
		$sql = $conn->prepare("select * from usuario where email=:email");
		$sql->bindParam(":email",$email,PDO::PARAM_STR);
		$sql ->execute();
	
	/*while( $datos = $sql->fetch() )
    echo $datos[0]"ID".$datos[1].$datos[2].$datos[3] . '<br />';}*/

	$result= $sql->fetch();
	

   }
   catch(PDOException $e) {
  $result= 'Error: ' . $e->getMessage();
  }
	return $result;
	 
 }
?>
 
 

