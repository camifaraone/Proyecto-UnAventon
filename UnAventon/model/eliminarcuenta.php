<?php

function eliminar_cuenta($id){

		require ("db.php");



		try{

		$gsent = $conn->prepare('UPDATE usuario SET bajalogica=? WHERE idautoincremental =?');

		
		$gsent->execute(array(1, $id));




		//$result=$gsent->fetch();

		}

catch(PDOException $e){

echo "ERROR: " . $e->getMessage();
return false; //die();

}


return true;

}

?>