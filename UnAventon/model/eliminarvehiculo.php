<?php

function delVehiculo($idvehiculo){

		require ("db.php");



		try{

		$gsent = $conn->prepare("UPDATE vehiculo SET bajalogica=? WHERE idvehiculo=?");

				
		$gsent->execute(array(1, $idvehiculo));




		//$result=$gsent->fetch();

		}

catch(PDOException $e){

echo "ERROR: " . $e->getMessage();
return false; //die();

}


return true;

}






function verificarvehiculo($idvehiculo,$id){

		require ("db.php");



		try{

		$gsent = $conn->prepare('SELECT * FROM viaje WHERE idvehiculo = :idvehiculo');

		$gsent->bindParam(':idvehiculo', $idvehiculo, PDO::PARAM_INT);
				
		$gsent->execute();



		$result=$gsent->fetch();
		//print_r($result);
		if($result != ''){

		echo "<html><script> alert('El vehiculo se encuentra asociado a un viaje. No se puede eliminar');</script></html>"; 
		echo "<html><script> document.location.href='../controller/perfil.php?idautoincremental=".$id."';</script></html>"; 
			
}
else {
			echo "<html><script> alert('Vehiculo eliminado correctamente');</script></html>"; 
			$idvehiculo= delVehiculo($_GET["idvehiculo"]);
			echo "<html><script> document.location.href='../controller/perfil.php?idautoincremental=".$id."';</script></html>"; 
		
}

		}

catch(PDOException $e){

echo "ERROR: " . $e->getMessage();
return 'Error: ' . $e->getMessage();

}


return true;

}







function get_id($idvehiculo) {
	 require "../model/db.php";//te crea una conexion
	try{
		$sql = $conn->prepare("select idautoincremental from vehiculo where idvehiculo=:idvehiculo");
		$sql->bindParam(":idvehiculo",$idvehiculo,PDO::PARAM_INT);
		$sql ->execute();
	
	/*while( $datos = $sql->fetch() )
    echo $datos[0]"ID".$datos[1].$datos[2].$datos[3] . '<br />';}*/

	$result= $sql->fetchAll()[0][0];
	
   }
   catch(PDOException $e) {
  $result= 'Error: ' . $e->getMessage();
  }
	return $result;
	 
 }

?>