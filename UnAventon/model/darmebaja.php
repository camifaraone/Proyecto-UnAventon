<?php

function cancelar($id,$idviaje){

		require_once ("db.php");

//$conn = conectar(); //funcion que conecta con bd

		try{

		$gsent = $conn->prepare('DELETE FROM estadopostulacion WHERE idautoincremental=:id and idviaje=:idviaje');

		$gsent->bindParam(':id', $id, PDO::PARAM_INT);
		$gsent->bindParam(':idviaje', $idviaje, PDO::PARAM_INT);
				
		$gsent->execute();




		//$result=$gsent->fetch();

		
				}

catch(PDOException $e){

echo "ERROR: " . $e->getMessage();
return false; //die();

}

//desconectar($conn);

return true;

}




?>