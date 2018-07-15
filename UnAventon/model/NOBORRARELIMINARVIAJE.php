<?php 
 	function geteliminar($id){
	require ("db.php");
	try{
		$sql = $conn->prepare("select calificacion from usuario where idautoincremental=:id");
		$sql->bindParam(":id",$id,PDO::PARAM_INT);
		$sql ->execute();
	
	/*while( $datos = $sql->fetch() )
    echo $datos[0]"ID".$datos[1].$datos[2].$datos[3] . '<br />';}*/

	$result= $sql->fetch();
	

   }catch(PDOException $e) {
  $result= 'Error: ' . $e->getMessage();
  }
	return $result;
 }
function delviaje($idviaje){

		require ("db.php");



		try{

		$gsent = $conn->prepare('DELETE FROM viaje WHERE idviaje= :idviaje');

		$gsent->bindParam(':idviaje', $idviaje, PDO::PARAM_INT);
				
		$gsent->execute();
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



		$result=$gsent->fetch();
		//print_r($result);
		if($result != ''){
			
			echo 'El vehiculo se encuentra asociado a un viaje. No se puede eliminar!';
			header("Location: ../controller/misviajes.php?idautoincremental=".$id);
}
else {
	
			echo 'Vehiculo eliminado correctamente';
			$idviaje= delviaje($_GET["idviaje"]);
			header("Location: ../controller/misviajes.php?idautoincremental=".$id);
}

		}

catch(PDOException $e){

echo "ERROR: " . $e->getMessage();
return 'Error: ' . $e->getMessage();

}

return true;

}






function get_id($idviaje){
	 require "../model/db.php";//te crea una conexion
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
 <td> <a href='../controller/eliminarviaje.php?idviaje=<? echo ".$viaje[$i]["idviaje"]."?>' onclick= "return confirm ('Seguro?')">cdc</a></td>
	