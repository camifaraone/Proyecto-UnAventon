<?php

function delVehiculo($idvehiculo){

		require ("db.php");



		try{

		$gsent = $conn->prepare('DELETE FROM vehiculo WHERE idvehiculo = :idvehiculo');

		$gsent->bindParam(':idvehiculo', $idvehiculo, PDO::PARAM_INT);
				
		$gsent->execute();




		//$result=$gsent->fetch();

		}

catch(PDOException $e){

echo "ERROR: " . $e->getMessage();
return false; //die();

}


return true;

}






function verificarvehiculo($idvehiculo){

		require ("db.php");



		try{

		$gsent = $conn->prepare('SELECT * FROM viaje WHERE idvehiculo = :idvehiculo');

		$gsent->bindParam(':idvehiculo', $idvehiculo, PDO::PARAM_INT);
				
		$gsent->execute();




		$result=$gsent->fetchAll();

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