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

?>