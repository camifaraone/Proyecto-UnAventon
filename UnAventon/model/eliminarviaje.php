<?php

function del_viaje($idviaje){

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


function get_id($idviaje){
	 require ("db.php");//te crea una conexion
	try{
		$sql = $conn->prepare("select idautoincremental from viaje where idviaje=:idviaje"); 
		$sql->bindParam(":idviaje",$idviaje,PDO::PARAM_INT);   
		$sql ->execute();
	
	

	$result= $sql->fetch()[0][0]; // los resultados de la consulta son guardados en un array 
	

   }
   catch(PDOException $e) {
  $result= 'Error: ' . $e->getMessage();
  }
	return $result;
	 
 }


?>