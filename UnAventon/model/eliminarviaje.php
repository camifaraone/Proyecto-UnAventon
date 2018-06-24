<?php

function delViaje($idviaje){

		require ("db.php");



		try{

		$gsent = $conn->prepare('DELETE FROM viaje WHERE idviaje= :idviaje');

		$gsent->bindParam(':idviaje', $idviaje, PDO::PARAM_INT);
				
		$gsent->execute();




		//$result=$gsent->fetch();

		}

catch(PDOException $e){

echo "ERROR: " . $e->getMessage();
return false; //die();

}


return true;

}






function verificarviaje($idviaje,$id){

		require ("db.php");



		try{

		$gsent = $conn->prepare('SELECT * FROM viaje WHERE idviaje = :idviaje');

		$gsent->bindParam(':idviaje', $idviaje, PDO::PARAM_INT);
				
		$gsent->execute();



		$result=$gsent->fetchAll();
		//print_r($result);
		if($result != ''){
			echo 'Vehiculo eliminado correctamente';
			$idviaje= delViaje($_GET["idviaje"]);
			header("Location: ../controller/misviajes.php?idautoincremental=".$id);

}

		}

catch(PDOException $e){

echo "ERROR: " . $e->getMessage();
return 'Error: ' . $e->getMessage();

}


return true;

}







function get_id($idviaje) {
	 require "../model/db.php";//te crea una conexion
	try{
		$sql = $conn->prepare("select idautoincremental from viaje where idviaje=:idviaje");
		$sql->bindParam(":idviaje",$idviaje,PDO::PARAM_INT);
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