<?php

function eliminar_cuenta($id){

		require ("db.php");



		try{

		$gsent = $conn->prepare('DELETE FROM usuario WHERE idautoincremental = :id');

		$gsent->bindParam(':id', $id, PDO::PARAM_INT);
				
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